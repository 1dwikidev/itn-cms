<?php

use App\Models\Coverage;
use App\Models\Coverages;
use App\Models\Locations;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('coverages', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name')->unique();
            $table->string('slug')->unique();
        });

        Schema::create('coverage_location', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Coverages::class)
                ->constrained()
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->foreignIdFor(Locations::class)
                ->constrained()
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
        });


        Schema::create('coveragables', function (Blueprint $table) {
            $table->id();
            // $table->foreignIdFor(Coverages::class)
                // ->constrained()
                // ->cascadeOnUpdate()
                // ->cascadeOnDelete();
            $table->string('coverageable_type');
            $table->string('coverageable_id');
            $table->unique(['coverageable_type', 'coverageable_id']);
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coverageables');
        Schema::dropIfExists('coverage_location');
        Schema::dropIfExists('coverages');
    }
};
