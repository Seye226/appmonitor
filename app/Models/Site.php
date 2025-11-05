<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    use HasFactory;


    protected $fillable = [
        'description',
        'reference',
        'localisation',

        'client_id',


                    // $table->string('description');
                    // $table->string('reference')->unique();

                    // $table->string('localisation')->unique();

            // $table->string('load_info')->nullable();
            // $table->string('pv_info')->nullable();
            // $table->string('battery_info')->nullable();
            // $table->string('grid_info')->nullable();
            
            // $table->string('genset_info')->nullable();

            // $table->foreignId('client_id')->nullable()->index();
            // $table->foreignId('origin_superviseur_id')->nullable()->index();


    ];



    public function client()
    {
        return $this->belongsTo(\App\Models\Client::class, 'client_id');
    }

    public function PostedDatas()
    {
        return $this->hasMany(\App\Models\PostedData::class, 'site_id');
    }


}
