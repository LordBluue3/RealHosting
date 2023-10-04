<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function show(){
        $data = [
            'title'=> 'Escolha um dos nossos serviços e aproveite nossas qualidades ',
            'text'=> 'Promova hoje seu servidor com uma hospedagem com uma alta qualidade e proteção contra qualquer tipo de ataque.'
        ];

        $product = [ 
            'image'=>'/assets/images/products/image1.png',
            'title'=>'Hospedagem de MTA',
            'price'=>'9,99',
            'description'=>'Servidores MTA com um sistema 
            inovador de compactador e download
            e hospedagem totalmente Brasileira.'
        ];

        return view('pages.products', compact('data', 'product'));
    }
}
