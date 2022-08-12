<?php

namespace App\Http\Controllers;

use App\Models\Postagens;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use App\Models\User;
use Illuminate\Auth\Events\Failed;
use Illuminate\Support\Facades\DB;
use Auth;

class RegistroController extends Controller
{
    public function create()
    { 
        return view('auth.registro');
    }
    
    public function store()
    {
        if(!Auth::check())
        {
            return redirect('/login')->withFail('Administrador não logado. Acesse como administrador.');
        }
        $logado = Auth::User()->super_usuario;
        $admin = request('senhaAdmin');
                
        if((Auth::check()) && ($logado == $admin))
        { 
            if(User::where('email', '=', request(['email']))-> count() > 0)
            {   
                return redirect('/registro')->withFail('Usuário já existe.');
            }
            elseif (User::where('email' !=  request(['email'])))
            {
                $this->validate(request(), [
                    'name'      => 'required|unique:users',
                    'email'     => 'required|email|unique:users',
                    'password'  => 'required|confirmed|min:8|max:18',
                ]);
                $user = User::create(request(['name', 'email', 'password']));                
                return redirect('/login')->with('msg', 'Usuário registrado com sucesso.');
            }
        }
        else
        {
            return redirect('/registro')->withFail('Senha de administrador não confere.');                                
        }
    }
}