<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use RealRashid\SweetAlert\Facades\Alert;

class PrincipalController extends Controller
{
    public function principal()
    {
        return view('site.principal');
    }

    public function novoUsuario (Request $request) 
    {   
        // dd($request);

        $validacao_registro = [
            
            'name'     => 'required',
            'email'    => 'email',
            'password' => 'required'

        ];

        $msg_validacao = [

            'name.required' => 'Campo obrigatório',
            'email.email' => 'Informe um e-mail válido!',
            'password.required' => 'Campo obrigatório',
        ];

        $request->validate($validacao_registro, $msg_validacao);


        try {
            
            User::create([
                'name'              => $request->name,
                'email'             => $request->email,
                'password'          => Hash::make($request->password),
                'email_verified_at' => Carbon::now()
            ]);   

        } catch (\Exception $th) {
                   
            dd($th);
        }

        Alert::alert('','Registro realizado com sucesso!','success');

        return redirect()->route('site.index');
    }

}
