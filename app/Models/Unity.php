<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Unity extends Model
{
    use SoftDeletes, HasFactory;

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
    ];
}
