<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $fillable = [
        'product_id', 'unity_id', 'stock'
    ];

    /**
     * Relationship methods
     */
    public function product() {
        return $this->belongsTo(Product::class);
    }

    public function unity() {
        return $this->belongsTo(Unity::class);
    }
}
