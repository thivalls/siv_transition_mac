<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Tenant\TenantModels;
use Illuminate\Database\Eloquent\Model;

class ProductOutput extends Model
{
    use TenantModels, HasFactory;

    protected $fillable = [
        'amount', 'product_id', 'provider_id', 'unity_id', 'nf'
    ];

    /**
     * Relationship methods
     */
    public function product() {
        return $this->belongsTo(Product::class);
    }
    public function provider() {
        return $this->belongsTo(Product::class);
    }
    public function unity() {
        return $this->belongsTo(Product::class);
    }
}
