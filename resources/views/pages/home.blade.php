@extends('layouts/app')

@push('head')
    @vite(['resources/scss/home.scss'])
@endpush

@section('content')
    <section class="section_banner">
        <img src=" {{ asset('assets/images/home/banner_mob.png') }} " alt="banner versão mobile" class="banner_mob">
        <img src=" {{ asset('assets/images/home/banner_desk.png') }} " alt="banner versão desktop" class="banner_desk">
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
    <section class="section_carousel">
        <div class="container_carousel">
            <ul class="carousel">
                <li>
                    <div class="container_icon">
                        <img draggable="false" src=" {{asset('assets/images/home/icons/suport.svg')}} " alt="Icone de suporte">
                    </div>
                    <p>Suporte<br> 
                        Especializado</p>
                </li>
                <li>
                    <div class="container_icon">
                        <img draggable="false" src=" {{asset('assets/images/home/icons/protection.svg')}} " alt="Icone de proteção">
                    </div>
                    <p>Proteção de<br>
                         Dados</p>
                </li>
                <li>
                    <div class="container_icon">
                        <img draggable="false" src=" {{asset('assets/images/home/icons/host.svg')}} " alt="Icone de hospedagem">
                    </div>
                    <p>Hospedagem <br>
                        Licenciada</p>
                </li>
                <li>
                    <div class="container_icon">
                        <img draggable="false" src=" {{asset('assets/images/home/icons/quality.svg')}} " alt="Icone de qualidade">
                    </div>
                    <p>Qualidade & <br> 
                        Performance</p>
                </li>
                <li>
                    <div class="container_icon">
                        <img draggable="false" src=" {{asset('assets/images/home/icons/system.svg')}} " alt="Icone de sistema">
                    </div>
                    <p>Sistemas <br>
                         Inteligentes</p>
                </li>
            </ul>
        </div>
    </section>

    @vite(['resources/js/carousel.js'])
@endsection
