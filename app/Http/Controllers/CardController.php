<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;

class CardController extends Controller
{

    public function cards(){

        $cards= Card::all();
        //dd($cards);

        return view('allCards', compact('cards'));
    }

    public function cardCadastro(Request $request){
        
        $cadastro= new Card();
        
        $cadastro->seguimento = $request ->seguimento;
        $cadastro ->assunto =$request->assunto;
        $cadastro->data= $request->data;

        $cadastro->save();

        return view('dashboard');

    }

    
}
