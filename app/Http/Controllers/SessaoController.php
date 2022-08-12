<?php

namespace App\Http\Controllers;

use App\Models\Postagens;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class SessaoController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store()
    {
        if (auth()->attempt(request(['email', 'password'])) == false) 
        {
            return back()->withErrors([
                'message' => 'Email ou senha está incorreta'
            ]);
        }
        return redirect()->to('/postagem');
    }

    public function destroy()
    {
        Auth::logout();
        return redirect()->to('/login');
    }
}