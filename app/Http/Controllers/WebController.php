<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    //

    public function manage_create_page()
    {

        return view('welcome');

    }

    public function manage_create_save($modelname)
    {

        dd("dd: ici save multiple model selon 'modelname'=>",$modelname);
        return view('welcome');

    }

}
