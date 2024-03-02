<?php

use Faker\Guesser\Name;
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

            $table->string('company', 64);
            $table->string('departure_station', 64);
            $table->string('arrival_station', 64);
            $table->time('departure_time');
            $table->time('arrival_time');
            $table->string('code', 7)->unique();
            $table->unsignedTinyInteger('carriages_num')->nullable();  
            $table->boolean('on_time')->default(true);
            $table->boolean('cancelled')->default(false);

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
