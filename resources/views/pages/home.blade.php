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
                        <img draggable="false" src=" {{ asset('assets/images/home/icons/suport.svg') }} "
                            alt="Icone de suporte">
                    </div>
                    <p>Suporte<br>
                        Especializado</p>
                </li>
                <li>
                    <div class="container_icon">
                        <img draggable="false" src=" {{ asset('assets/images/home/icons/protection.svg') }} "
                            alt="Icone de proteção">
                    </div>
                    <p>Proteção de<br>
                        Dados</p>
                </li>
                <li>
                    <div class="container_icon">
                        <img draggable="false" src=" {{ asset('assets/images/home/icons/host.svg') }} "
                            alt="Icone de hospedagem">
                    </div>
                    <p>Hospedagem <br>
                        Licenciada</p>
                </li>
                <li>
                    <div class="container_icon">
                        <img draggable="false" src=" {{ asset('assets/images/home/icons/quality.svg') }} "
                            alt="Icone de qualidade">
                    </div>
                    <p>Qualidade & <br>
                        Performance</p>
                </li>
                <li>
                    <div class="container_icon">
                        <img draggable="false" src=" {{ asset('assets/images/home/icons/system.svg') }} "
                            alt="Icone de sistema">
                    </div>
                    <p>Sistemas <br>
                        Inteligentes</p>
                </li>
            </ul>
        </div>
    </section>
    <section class="section_products">
        <div class="container_products">
            <div class="container_text_plans">
                <h1>Confira os nossos principais plano
                    totalmente ideal para o seu projeto
                </h1>
                <p>Promova hoje seu servidor com uma
                    hospedagem com uma alta qualidade e proteção
                    contra qualquer tipo de ataque.
                </p>
            </div>

            <div class="container_carousel">
                <ul class="carousel_product">
                    <li>
                        <div class="container_plan_product">
                            <div class="container_image_product">
                                <img draggable="false" src=" {{asset('/assets/images/products/image1.png')}} " alt="Icone">
                            </div>
                            <div class="container_title_product">
                                <h1>Hospedagem de MTA</h1>
                            </div>
                            <div class="container_plans">
                                <p class="plan">Planos a partir de</p>
                                <p class="price"><strong>R$9,99</strong>/mensal</p>
                                <p class="description_plan">
                                    Servidores MTA com um sistema
                                    inovador de compactador e download
                                    e hospedagem totalmente Brasileira.
                                </p>
                            </div>
                            <div class="container_button">
                                <button>
                                    Ver todos os planos
                                </button>
                            </div>
                        </div>

                    </li>

                    <li>
                        <div class="container_plan_product">
                            <div class="container_image_product">
                                <img draggable="false" src=" {{asset('/assets/images/products/image1.png')}} " alt="Icone">
                            </div>
                            <div class="container_title_product">
                                <h1>Hospedagem de MTA</h1>
                            </div>
                            <div class="container_plans">
                                <p class="plan">Planos a partir de</p>
                                <p class="price"><strong>R$9,99</strong>/mensal</p>
                                <p class="description_plan">
                                    Servidores MTA com um sistema
                                    inovador de compactador e download
                                    e hospedagem totalmente Brasileira.
                                </p>
                            </div>
                            <div class="container_button">
                                <button>
                                    Ver todos os planos
                                </button>
                            </div>
                        </div>

                    </li>

                    <li>
                        <div class="container_plan_product">
                            <div class="container_image_product">
                                <img src=" {{asset('/assets/images/products/image1.png')}} " alt="Icone">
                            </div>
                            <div class="container_title_product">
                                <h1>Hospedagem de MTA</h1>
                            </div>
                            <div class="container_plans">
                                <p class="plan">Planos a partir de</p>
                                <p class="price"><strong>R$9,99</strong>/mensal</p>
                                <p class="description_plan">
                                    Servidores MTA com um sistema
                                    inovador de compactador e download
                                    e hospedagem totalmente Brasileira.
                                </p>
                            </div>
                            <div class="container_button">
                                <button>
                                    Ver todos os planos
                                </button>
                            </div>
                        </div>

                    </li>
                </ul>
            </div>
        </div>

    </section>
    <section class="section_testimony">

    </section>

    @vite(['resources/js/carousel.js'])
@endsection
