<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class News extends Model
{
    use HasFactory;

    public function NewsCategories(): BelongsToMany
    {
        return $this->belongsToMany(NewsCategories::class, 'categories_of_news', 'news_id', 'news_categories_id');
    }

    public function NewsCommnents(): HasMany
    {
        return $this->hasMany(NewsComments::class);
    }
}
