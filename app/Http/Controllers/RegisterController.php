<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
//hay que importar la biblioteca
use Illuminate\Support\Facades\Hash;
//hay que importar la biblioteca
use Illuminate\Support\Str;


class RegisterController extends Controller{

    public function index(){
        //dd("#Bloquiemos_a_jk");
        return view('auth.register');
    }
    //estore almacena
    public function store(Request $request){
        $request-> request-> add(['username' => Str::slug($request->username)]);
        $this->validate($request, [
            'name'=>'required | max:30',
            'username'=>'required |unique:users|min:3|max:30',
            'email' =>'required |unique:users|email|max:60',
            'password' =>'required|confirmed|min:6'
        ]);
        User::create([
            'name'=> $request->name,
            //Lower para minuscula 
            'username'=> $request->username,
            'email'=> $request->email,
            //hash y bcryp sirve para cuando la clave no esta siendo encriptada
            //hash no pone clave diferente
            'password'=> Hash::make($request->password)
            //'password'=> bcrypt($request->password)
        ]);

        /* auth()->attempt([
                'email' => $request->email,
                'password' => $request->password
            ]); */
            //forma 2 
           // auth()->attempt($request->only('email', 'password'));
        return redirect()->route('post.index');
    }

}
