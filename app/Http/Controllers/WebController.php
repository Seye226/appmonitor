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

    // public function manage_create_save($modelname)
    public function manage_create_save(Request $request, $modelname)
    {

        dd(
            "dd: ici save multiple model selon 'modelname'=>",
            $modelname,
            "request",
            // $request,
            $request,
            // $request('pseudo'),
            "request['pseudo']: ".$request['pseudo'],
            "request['nom']: ".$request['nom'],


            request('nom'),
            request('pseudo'),
            // request('user_id'),
            // request('telephone'),
        );
        return view('welcome');

    }

}
