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
                                <img draggable="false" src=" {{ asset('/assets/images/products/image1.png') }} "
                                    alt="Icone">
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
                                <img draggable="false" src=" {{ asset('/assets/images/products/image1.png') }} "
                                    alt="Icone">
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
                                <img src=" {{ asset('/assets/images/products/image1.png') }} " alt="Icone">
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
        <div class="container_testimony_client">
            <div class="container_title_testimony">
                <h1>Depoimentos de nossos Clientes</h1>
                <p>Veja alguns depoimentos de clientes que adquiriram
                    alguns dos nossos serviços.</p>
            </div>
            <div class="container_carousel">
                <ul class="carousel_testimony">
                    <li>
                        <div class="container_client">
                            <img src=" {{ asset('assets/images/home/testimony/client.png') }} " alt="">
                            <h1>JS Studio<br>
                                <strong>Cliente</strong>
                            </h1>
                        </div>
                        <div class="container_comment">
                            <p>Serviço de ótima qualidade e
                                com grande proteção, Recomendo!</p>
                        </div>
                    </li>

                    <li>
                        <div class="container_client">
                            <img src=" {{ asset('assets/images/home/testimony/client.png') }} " alt="">
                            <h1>JS Studio<br>
                                <strong>Cliente</strong>
                            </h1>
                        </div>
                        <div class="container_comment">
                            <p>Serviço de ótima qualidade e
                                com grande proteção, Recomendo!</p>
                        </div>
                    </li>

                    <li>
                        <div class="container_client">
                            <img src=" {{ asset('assets/images/home/testimony/client.png') }} " alt="">
                            <h1>JS Studio<br>
                                <strong>Cliente</strong>
                            </h1>
                        </div>
                        <div class="container_comment">
                            <p>Serviço de ótima qualidade e
                                com grande proteção, Recomendo!</p>
                        </div>
                    </li>
                </ul>
            </div>

        </div>

    </section>
    <section class="section_faq">
        <div class="title">
            <h1>Perguntas Frequentes</h1>
        </div>

        <div id="accordion" class="faq">
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading1">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1"
                        aria-expanded="true" aria-controls="collapse1">
                        Qual é o tempo de ativação do serviço?
                    </button>
                    <img src=" {{ asset('assets/images/home/icons/arrow.svg') }} " alt="">
                </h2>
                <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1"
                    data-bs-parent="#accordion">
                    <div class="accordion-body">
                        Nosso tempo de ativação dura em torno de 5
                        Minutos após a compra e validação do serviço
                        escolhido.
                    </div>
                </div>
            </div>
        </div>

        <div id="accordion2" class="faq">
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading2">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapse2" aria-expanded="true" aria-controls="collapse2">
                        Como funciona o sistema de reembolso?
                    </button>
                    <img src=" {{ asset('assets/images/home/icons/arrow.svg') }} " alt="">
                </h2>
                <div id="collapse2" class="accordion-collapse collapse " aria-labelledby="heading2"
                    data-bs-parent="#accordion2">
                    <div class="accordion-body">
                        Nosso tempo de ativação dura em torno de 5
                        Minutos após a compra e validação do serviço
                        escolhido.
                    </div>
                </div>
            </div>
        </div>

        <div id="accordion3" class="faq">
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading3">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapse3" aria-expanded="true" aria-controls="collapse3">
                        Qual horário de atendimento?
                    </button>
                    <img src=" {{ asset('assets/images/home/icons/arrow.svg') }} " alt="">
                </h2>
                <div id="collapse3" class="accordion-collapse collapse " aria-labelledby="heading3"
                    data-bs-parent="#accordion3">
                    <div class="accordion-body">
                        Nosso tempo de ativação dura em torno de 5
                        Minutos após a compra e validação do serviço
                        escolhido.
                    </div>
                </div>
            </div>
        </div>

        <div id="accordion4" class="faq">
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading4">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapse4" aria-expanded="true" aria-controls="collapse4">
                        Quais data center vocês utilizam?
                    </button>
                    <img src=" {{ asset('assets/images/home/icons/arrow.svg') }} " alt="">
                </h2>
                <div id="collapse4" class="accordion-collapse collapse " aria-labelledby="heading4"
                    data-bs-parent="#accordion4">
                    <div class="accordion-body">
                        Nosso tempo de ativação dura em torno de 5
                        Minutos após a compra e validação do serviço
                        escolhido.
                    </div>
                </div>
            </div>
        </div>


    </section>

    @vite(['resources/js/carousel.js'])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
@endsection
