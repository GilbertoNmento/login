<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\Usuario;
use Illuminate\Http\Request;

class LoginController extends Controller
{

     public function cadastrarUsuario(Request $request){
         //dd($request);
        $cadastro= new Usuario();
        $cadastro->cpf=$request->cpf;
        $cadastro->senha=$request->senha;

        $cadastro->save();
       
        return view('home');
     }



    public function validaUsuario(Request $request){
        //dd('estou em validaUsuario');
        $cpf=$request->cpf;
        $senha=$request->senha;
    //dd($senha, $cpf);

    $usuario = Usuario::where('cpf', $cpf)->where('senha', $senha)->first();
//dd($usuario);
        if ($usuario){
           //dd("Usuário validado");
           $cards= Card::all();
            //dd($cards); 
           return view ('dashboard', compact('usuario', 'cards'));
        } else {
          // dd("Usuário nao cadastrado") ;
          return view ('formCadastro');
        }

    }
}
