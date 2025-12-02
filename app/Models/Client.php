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
// "default_user_id",


// "created_by_user_id",

    ];

    protected $hidden = [
        // 'password',
        // 'remember_token',
        // 'two_factor_recovery_codes',
        // 'two_factor_secret',

        'created_by_user_id',
    ];


    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    }

    public function createdByUser()
    {
        return $this->belongsTo(\App\Models\User::class, 'created_by_user_id');
    }
    
    public function sites()
    {
        return $this->hasMany(\App\Models\Site::class, 'client_id');
    }


}
