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
        Schema::create('archives', function (Blueprint $table) {
            $table->id();

            // 20/05/2025
            $table->foreignId('recorded_id')->nullable()->index();


            $table->string('heure');
            $table->string('minute');
            $table->string('seconde');

            $table->string('load_power');

            $table->string('grid_voltage');
            $table->string('pv_voltage');
            $table->string('battery_voltage');


            $table->foreignId('status_id')->nullable()->index();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('archives');
    }
};
