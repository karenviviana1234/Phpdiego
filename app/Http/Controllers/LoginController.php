<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    public function index(){
        return view ('auth.login');
    }
    public function store(Request $request){
        $this->validate($request, [
            'email' =>'required | email',
            'password' =>'required'
        ]);
        //sirve para autenticar o validar 
       if(!auth()->attempt($request->only('email', 'password'))){
    //si no esta valido esta linea dara un mensaje de error
        return back()->with('mensaje','Error revise pendejo');
       }
       return redirect()->route('post.index');
    }
}
