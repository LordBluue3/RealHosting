@extends('layouts/app')

@push('head')
    @vite(['resources/scss/home.scss'])
@endpush

@section('content')
<section class="section_banner">
<img src=" {{asset('assets/images/home/banner_mob.png')}} " alt="banner versão mobile">
<div class="container_absolute_information">
    <div class="container_information">
        <div class="container_title">
            <h1>Bem vindo a melhor plataforma de
                Hospedagem do mercado.
            </h1>
        </div>
        <div class="container_text">
            <p>Hospede o seu servidor hoje mesmo em um ambiente
                com servidores 100% em Armazenamento SSD e
                Infraestrutura de ponta no brasil.
            </p>
        </div>
        <div class="container_button">
            <button>
                Crie sua conta
            </button>
        </div>
    </div>
</div>
</section>
@endsection
