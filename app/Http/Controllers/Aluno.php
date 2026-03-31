<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Aluno extends Controller
{
    // a api cria as funções chamadas de show (ai colocar a função show agora, fica melhor pra quando avançar no código)
    function show(){
        // Criar um array de objetos alunos contendo nome, telefone e email
        $alunos = [ 
            (Object) ['nome'=>'Diogo', 'telefone'=>'123', 'email'=>'diogo@hotmail.com'],
            (Object) ['nome'=>'Seleide', 'telefone'=>'321', 'email'=>'seleide@hotmail.com'],
            (Object) ['nome'=>'Filoxina', 'telefone'=>'999', 'email'=>'filo@hotmail.com']
        ];
    
        // Passar a array aluno para a view aluno.blade.php
        return view('aluno', compact('alunos'));
    }
}
