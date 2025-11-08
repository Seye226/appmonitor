<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;

 // use HasApiTokens, HasFactory, Notifiable;

    // // use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    // use Queueable;


    // protected $table = 'data';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        // // 'name',
        // // 'email',
        // // 'password',

        // // $table->string('mqtt_name');
        // // $table->string('yymmdd_HHmmSS')->unique();
        // $table->string('date');
        // $table->string('time');
        // // $table->float('value');


        'site_id',

        'mqtt_name',

        // 'yymmdd_HHmmSS',

        'date',
        'time',

        'value',

        // 'yymmdd_HHmmSS',
        // 'mqttmodel_id',
        //     'hour',
        //     'min',
        //     'sec',
        //     'value',


    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        // 'password',
        // 'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        // 'email_verified_at' => 'datetime',
    ];



    public function site()
    {
        return $this->belongsTo(\App\Models\Site::class, 'site_id');
    }

    // public function rooms()
    // {
    //     return $this->hasMany(\App\Models\Room::class, 'sitekey_id');
    // }





}