<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\unapplication;

class ProjectsApiController extends Controller
{
    //

    public function all(){
        return unapplication::all();
    }

    public function country($country){
        return unapplication::where('country',$country)->get();
    }

    public function status($status){
        return unapplication::where('status',$status)->get();
    }
}
