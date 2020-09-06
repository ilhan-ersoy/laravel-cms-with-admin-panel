<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Auth extends Controller
{
   	public function login(){
   		return view('back.auth.login');
   	}
}
