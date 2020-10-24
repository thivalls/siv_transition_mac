<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Tenant\TenantModels;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use softDeletes, TenantModels, HasFactory;

    protected $fillable = [
        'client_id',
        'user_id',
        'unity_id',
        'carrier_id',
        'shipping',
        'discount',
        'nf',
        'total',
        'type',
        'status',
        'step_process',
        'payment_status',
        'delivery_status',
        'discount_type',
        'note'
    ];


}
