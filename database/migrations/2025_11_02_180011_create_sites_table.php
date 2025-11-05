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
        Schema::create('sites', function (Blueprint $table) {
            $table->id();

            $table->string('description');
            $table->string('reference')->unique();

            $table->string('localisation')->unique();

            $table->string('load_info')->nullable();
            $table->string('pv_info')->nullable();
            $table->string('battery_info')->nullable();
            $table->string('grid_info')->nullable();
            
            $table->string('genset_info')->nullable();

            $table->foreignId('client_id')->nullable()->index();
            $table->foreignId('origin_superviseur_id')->nullable()->index();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sites');
    }
};
