<?php

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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('agencies', 175);
            $table->string('departures_stations', 150);
            $table->string('arrives_stations', 150);
            $table->dateTime('departures_times');
            $table->dateTime('arrives_times');
            $table->unsignedSmallInteger('trains_codes');
            $table->unsignedTinyInteger('wagons_numbers');
            $table->boolean('punctuals')->default(true);
            $table->boolean('cancelleds');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
