<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cv;

class NewController extends Controller
{
   public function store(request $request){
        

        $cv = new Cv();
        $cv->titre = $request->input('title');
        $cv->présentation = $request->input('presentation');
        $cv->save();

    }
}
