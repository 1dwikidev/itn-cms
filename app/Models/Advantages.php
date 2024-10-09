<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Advantages extends Model
{
    use HasFactory;

    public function employee(): BelongsToMany
    {   
        return $this->belongsToMany(Employees::class);
    }
}
