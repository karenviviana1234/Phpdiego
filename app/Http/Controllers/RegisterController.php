<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller{

    public function index(){
        //dd("#Bloquiemos_a_pablo");
        return view('auth.register');
    }
    public function store(Request $request){
        $this->validate($request, [
            'name'=>'required | max:30',
            'username'=>'required |unique:users|min:3|max:30',
            'email' =>'required |unique:users|email|max:60',
            'password' =>'required|confirmed|min:6'
        ]);
        dd("Insertar los datos del formulario");
    }

}
