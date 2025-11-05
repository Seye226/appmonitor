<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// CreatePostedDatasTable
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Schema::create('posted_data', function (Blueprint $table) {
        
        Schema::create('posted_datas', function (Blueprint $table) {


            $table->id();


            $table->foreignId('site_id')->nullable()->index();


            // $table->string('topic');


            //     // $table->foreign('mqttmodels');
            //     $table->foreignId('mqttmodel_id');
            $table->string('mqtt_name');

                            // $table->foreignId('recorded_day_id');
                            // $table->foreignId('day');
                            // $table->foreignId('month');
                            // $table->foreignId('year');
 
            $table->string('date');
            $table->string('time');

                            // $table->string('yymmdd_HHmmSS')->unique();
                            // $table->string('ref_yymmdd_HHmmSS')->unique();
                            
                            // //---------------------


                            //     // $table->string('hour');
                            //     $table->double('hour');
                            //     // $table->string('min');
                            //     $table->double('min');
                            //     // $table->string('sec');
                            //     $table->double('sec');

                            //     // $table->decimal('value');
                            //     // $table->double('value');
                            //     $table->float('value');

                            // //---------------------

            
            $table->float('value');

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::dropIfExists('posted_data');
       Schema::dropIfExists('posted_datas');
    }
};








