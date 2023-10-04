<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show()
    {
        $data = [
            'title'=> 'Confira todos nossos planos para
            Hospedagem de Minecraft',
            'text'=> 'Promova hoje seu servidor com uma hospedagem com uma
            alta qualidade e proteção contra qualquer tipo de ataque.'
        ];
        $specificProduct = [
            'image'=>'/assets/images/products/image1.png',
            'title'=>'Hospedagem de MTA',
            'price'=>'9,99',
            'description'=>'Servidores MTA com um sistema 
            inovador de compactador e download
            e hospedagem totalmente Brasileira.'

        ];
        return view('pages/product', compact('data','specificProduct'));
    }
}
