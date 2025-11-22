<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Superviseur extends Model
{
    use HasFactory;



    protected $fillable = [
        
        'pseudo',
        'user_id',
        'telephone',
  
    ];


    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    }

    public function Clients()
    {
        // return $this->hasMany(\App\Models\Client::class, 'superviseur_id');
        return $this->hasMany(\App\Models\Client::class, 'created_by_user_id');
    }

    public function Sites()
    {
        return $this->hasMany(\App\Models\Site::class, 'superviseur_id');
    }


}
