<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class curso extends Controller
{
    function show(){
        $cursos = [
            (Object) ['nome'=>'PWII', 'horario'=>'das 13:10 ás 14:50'],
            (Object) ['nome'=>'Banco de Dados', 'horario'=>'das 16:50 ás 18:30'],
        ];

        //compact - serve para passar a array curso para a view curso.blade.php
        view('curso', compact('cursos'));
    }
}
