<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{

    // Request - recebe a aquisição e já envia direto
   function index () {
    return view('aluno.index');
}

    function adicionar (Request $dados) {
        $aluno = new\App\Models\AlunoModel();
        $aluno::create($dados->all());
        return view('aluno.index', ['Sucesso' => 'Aluno Cadastrado!']);
        // dd - depuration
        // dd($dados->all());
    }

    function remover () { }

    function atualizar () { }

    function consultar () { }
}
