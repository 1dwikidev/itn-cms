<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Employees extends Model
{
    use HasFactory;

    public function advantages(): BelongsToMany
    {
        return $this->belongsToMany(Advantages::class);
    }
}
