<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarrierController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductInputController;
use App\Http\Controllers\ProductOutputController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\UnityController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

$exceptRuleDefault = ['except' => ['create', 'edit']];
$onlyRuleDefault = ['only' => ['index', 'store', 'show']];

Route::post('/sanctum/token', function (Request $request) {
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
        'abilities' => 'required',
    ]);

    $user = User::where('email', $request->email)->first();

    if (! $user || ! Hash::check($request->password, $user->password)) {
        throw ValidationException::withMessages([
            'email' => ['The provided credentials are incorrect.'],
        ]);
    }

    return $user->createToken('api-token', $request->abilities)->plainTextToken;
});

Route::group(['middleware' => 'auth:sanctum', 'as' => 'api.'], function() use ($exceptRuleDefault, $onlyRuleDefault) {
    // test ability on app
    Route::get('sanctum/can/{ability}', function(Request $request, $ability){
        $can = !$request->user()->tokenCan($ability);
        return response()->json(["error" => $can], 200);
    });

    // Route::group(['middleware' => 'admin'], function(){
    //     Route::get('test', function(){
    //         return 'passei';
    //     });
    // });

    Route::group(['middleware' => 'tenant'], function() use ($exceptRuleDefault, $onlyRuleDefault) {
        Route::resource('clients', ClientController::class, $exceptRuleDefault);
        Route::resource('providers', ProviderController::class, $exceptRuleDefault);
        Route::resource('inputs', ProductInputController::class, $onlyRuleDefault);
        Route::resource('outputs', ProductOutputController::class, $onlyRuleDefault);
        Route::resource('carriers', CarrierController::class, $exceptRuleDefault);
    });

    // auth commons group routes
    Route::resource('unities', UnityController::class, $exceptRuleDefault);
    Route::resource('categories', CategoryController::class);
    Route::resource('products', ProductController::class, $exceptRuleDefault);

});
