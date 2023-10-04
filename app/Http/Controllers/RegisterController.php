<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function show()
    {
        return view('pages/register');
    }
    public function store(Request $request){
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        $passwordHash = Hash::make($password);

        $user = User::create([
            'name'=> $name,
            'email'=>$email,
            'password'=>$passwordHash
        ]);
        $user->save();


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
        return view('pages/products', compact('data', 'product'));
    }
}
