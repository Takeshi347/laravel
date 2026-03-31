<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Professor extends Controller
{
    function show(){
        $professores = [
            (Object) ['nome'=>'Diogo', 'telefone'=>'456', 'email'=>'diogo@hotmail.com'],
            (Object) ['nome'=>'Felipe', 'telefone'=>'789', 'email'=>'felipe@hotmail.com']
        ];

        //compact - serve para passar a array professor para a view professor.blade.php
        return view('professor', compact('professores'));
    }
}
