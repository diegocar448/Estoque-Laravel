<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Request;
use Auth;

class LoginController extends Controller
{
    public function form()
    {
    	return view('form_login');
    }

    public function login()
    {
    	//pegar credenciais apenas email e senha
    	$credenciais = Request::only('email', 'password');

    	//passar credenciais para o attempt(valida e entrar)
    	if (Auth::attempt($credenciais)) {
    		return redirect('/produtos');
    	}

    	return redirect('/login');
    	
    }
}
