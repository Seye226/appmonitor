<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Site extends Model
{
    use HasFactory;


    protected $fillable = [
        'description',
        'reference',
        'adresse',

        'localisation',

        'client_id',

        // 'origin_superviseur_id',
        'superviseur_id',



            //             // $table->string('description');
            //             // $table->string('reference')->unique();
            //             // $table->string('adresse')->unique();

            //             // $table->string('localisation')->unique();

            // $table->string('load_info')->nullable();
            // $table->string('pv_info')->nullable();
            // $table->string('battery_info')->nullable();
            // $table->string('grid_info')->nullable();
            
            // $table->string('genset_info')->nullable();
            
            //             // $table->foreignId('client_id')->index();

            //             // // $table->foreignId('origin_superviseur_id')->nullable()->index();
            //             // $table->foreignId('superviseur_id')->nullable()->index();


            

        'load_info',
        'pv_info',
        'battery_info',
        'grid_info',

        'genset_info',
        

        
    ];



    public function client()
    {
        return $this->belongsTo(\App\Models\Client::class, 'client_id');
    }
    public function superviseur()
    {
        return $this->belongsTo(\App\Models\Superviseur::class, 'superviseur_id');
    }

    public function PostedDatas()
    {
        return $this->hasMany(\App\Models\PostedData::class, 'site_id');
    }


    public function Datas()
    {
        return $this->hasMany(\App\Models\Data::class, 'site_id');
    }


}
