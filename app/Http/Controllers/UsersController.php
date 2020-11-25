<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class UsersController extends Controller
{
    
    public function entrer(){

    	$User = new Users();
    	$User->email = "Yassine";
    	$User->password = "Yasssine";

    	$User->save();
    }

    public function voir(){
    	$User = Users::all();
    	return view('view2', ['Users' => $User]);
    }

}
