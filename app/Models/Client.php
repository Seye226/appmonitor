<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;


    protected $fillable = [

        'firstname',
        'lastname',
        'pseudo',
        'adresse',
        'telephone',
"user_id",

    ];


    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    }
    
    public function sites()
    {
        return $this->hasMany(\App\Models\Site::class, 'client_id');
    }


}
