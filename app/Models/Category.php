<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes, Sluggable, HasFactory;

    protected $fillable = [
        'name',
        'slug'
    ];

    public function sluggable()
    {
        return [
            'slug' => [
                'source'    => 'name',
                'onUpdate'  => true,
            ]
        ];
    }

    /**
     * Relationship methods
     */
    public function products() {
        return $this->hasMany(Product::class)->withTrashed();
    }
}
