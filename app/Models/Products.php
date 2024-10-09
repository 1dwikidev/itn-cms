<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Products extends Model
{
    use HasFactory;

    protected $casts = [
        'attributes' => 'array',
    ];

    public function productCategories(): BelongsToMany
    {
        return $this->belongsToMany(ProductCategories::class, 'categories_of_products', 'products_id', 'product_categories_id');
    }
}
