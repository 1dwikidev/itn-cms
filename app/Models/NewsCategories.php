<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class NewsCategories extends Model
{
    use HasFactory;

    public function News(): BelongsToMany
    {
        return $this->belongsToMany(News::class, 'categories_of_news', 'news_categories_id', 'news_id');

    }
}
