<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class NewsComments extends Model
{
    use HasFactory;

    public function News(): BelongsTo
    {
        return $this->belongsTo(News::class);
    }
}
