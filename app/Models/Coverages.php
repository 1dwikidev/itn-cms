<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Coverages extends Model
{
    use HasFactory;

    public function Coveragables(): MorphToMany
    {
        return $this->morphToMany(Coveragables::class, "Coveragables");
    }

    public function Locations(): BelongsToMany
    {
        return $this->belongsToMany(Locations::class, "coverage_location");
    }

}
