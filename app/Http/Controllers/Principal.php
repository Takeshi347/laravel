<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Principal extends Controller
{
    function principal(){
        echo 'Página Principal';
    }

    function somar(int $p1, int $p2){
        // aspas duplas para poder acessar a váriavel dentro da função
        // parenteses para fazer a operação e depois a string
        // echo "$p1 + $p2 = " . ($p1 + $p2);
        
        return view('somar', ['p1'=>$p1, 'p2'=>$p2]);
        
    }

    function multiplcar(int $p1, int $p2){
        
        return view('multiplicar', ['p1'=>$p1, 'p2'=>$p2]);
        
    }

    function subtrair(int $p1, int $p2){
        
        return view('subtrair', ['p1'=>$p1, 'p2'=>$p2]);
        
    }

    function dividir(int $p1, int $p2){
        
        return view('dividir', ['p1'=>$p1, 'p2'=>$p2]);
        
    }

    function produtos(){
        $produtos = [
            "produto1" => ["id" => 1, "nome" => "computador", "preco" => 100],
            "produto2" => ["id" => 2, "nome" => "mouse gamer", "preco" => 150],
            "produto3" => ["id" => 3, "nome" => "teclado mecanico", "preco" => 350],
            "produto4" => ["id" => 4, "nome" => "monitor 24 pol", "preco" => 900],
            "produto5" => ["id" => 5, "nome" => "headset usb", "preco" => 200],
            "produto6" => ["id" => 6, "nome" => "webcam full hd", "preco" => 280],
            "produto7" => ["id" => 7, "nome" => "cadeira de escritorio", "preco" => 1200],
            "produto8" => ["id" => 8, "nome" => "impressora laser", "preco" => 850],
            "produto9" => ["id" => 9, "nome" => "ssd 1tb", "preco" => 450],
            "produto10" => ["id" => 10, "nome" => "memoria ram 16gb", "preco" => 320],
            "produto11" => ["id" => 11, "nome" => "placa de video", "preco" => 2500],
            "produto12" => ["id" => 12, "nome" => "gabinete atx", "preco" => 400],
            "produto13" => ["id" => 13, "nome" => "fonte 650w", "preco" => 380],
            "produto14" => ["id" => 14, "nome" => "microfone condensador", "preco" => 190],
            "produto15" => ["id" => 15, "nome" => "suporte monitor", "preco" => 120],
            "produto16" => ["id" => 16, "nome" => "cabo hdmi 2m", "preco" => 45],
            "produto17" => ["id" => 17, "nome" => "roteador wi-fi 6", "preco" => 600],
            "produto18" => ["id" => 18, "nome" => "HD externo 2tb", "preco" => 500],
            "produto19" => ["id" => 19, "nome" => "caixa de som bluetooth", "preco" => 250],
            "produto20" => ["id" => 20, "nome" => "tapete mousepad xl", "preco" => 80],
            "produto21" => ["id" => 21, "nome" => "adaptador usb-c", "preco" => 60]
        ];

        return view('compras', ["produtos" => $produtos]);
    }
    
}

