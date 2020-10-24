<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = [
        'category_id',
        'name',
        'type_unit',
        'price',
        'weight'
    ];

    /**
     * Relations
     */
    public function category() {
        return $this->belongsTo(Category::class)->withTrashed();
    }
}
