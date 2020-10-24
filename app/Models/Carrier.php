<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Tenant\TenantModels;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Carrier extends Model
{
    use SoftDeletes, TenantModels, HasFactory;

    protected $fillable = [
        'name',
        'cnpj',
        'street',
        'number',
        'zipcode',
        'city',
        'state',
        'phone1',
        'phone2',
        'email',
        'notes',
        'unity_id',
    ];
}
