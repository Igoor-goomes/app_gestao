<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Stmt\UseUse;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    public function index () 
    {
        return view('site.login');
    }

    public function login (Request $request)
    {
        
        $email = $request->input('email');
        $password = $request->get('password');
                    
        if(Auth::attempt(['email' => $email, 'password' => $password])) { 
            return redirect()->route('app.produto.index');
        } else {
            Alert::alert('','E-mail e/ou senha estão incorretos, por favor verifique!','error');
            return back()->withInput();
        }

        return back()->withInput();
    } 

    public function sair ()
    {
        Auth::logout();
        return redirect()->route('site.login');
    }
}
