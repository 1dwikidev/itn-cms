<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class CoverageLocation extends Model
{
    use HasFactory;

    // public function Coveragables(): MorphToMany
    // {
    //     return $this->morphToMany(Coveragables::class, "Coveragables");
    // }


    // public function Locations(): HasMany
    // {
    //     return $this->hasMany(Locations::class);
    // }
}
