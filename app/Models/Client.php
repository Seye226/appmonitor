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

    ];


    public function sites()
    {
        return $this->hasMany(\App\Models\Site::class, 'site_id');
    }


}
