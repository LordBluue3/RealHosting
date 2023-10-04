<!DOCTYPE html>

<html>

<head>
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    @vite(['resources/scss/layout/app.scss'])

    @stack('head')
</head>

<body>
    <header>
        <div class="section_discord_terms">
            <div class="container_discod_term">
                <div class="container_discord">
                    <img src="{{ asset('assets/images/icons/discord.svg') }}" alt="discord">
                    <p>Atendimento via Discord RealHosting</p>
                </div>

                <div class="container_terms">
                    <img src="{{ asset('assets/images/icons/terms.svg') }}" alt="term">
                    <p>Termos e Políticas</p>
                </div>
            </div>
        </div>
        <nav>
            <div class="container_nav_mob">
                <div class="container_menu_logo">
                    <img src=" {{ asset('assets/images/icons/hamburguer.svg') }} " alt="menu hamburguer"
                        class="menu_hamburguer">
                    <img src=" {{ asset('assets/images/logos/logo_mob.svg') }} " alt="Logo Real Hosting">
                </div>
                <div class="container_user">
                    <img src=" {{ asset('assets/images/icons/user.svg') }} " alt="user">
                </div>
            </div>

            <div class="container_nav_desk">
                <div class="container_logo">
                    <img src=" {{ asset('assets/images/icons/hamburguer.svg') }} " alt="menu hamburguer"
                        class="menu_hamburguer_tablet">
                    <a href="{{route('home')}}">
                        <img src=" {{ asset('assets/images/logos/logo_desk.svg') }} " alt="Logo Real Hosting">
                    </a>
                </div>

                <ul>
                    <li><a href="{{route('home')}}">ínicio</a></li>
                    <li id="dropdown">Hospedagem
                        <div class="triangle"> </div>
                        <div class="dropdown">
                            <ul>
                                <li>Minecraft</li>
                                <li>Multi Theft Auto</li>
                                <li>FiveM</li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="{{route('products')}}">Produtos</a></li>
                    <li>Suporte</li>
                    <li>Outros</li>
                </ul>

                <div class="container_register_my_accont">
                    <p><a href="{{route('register')}}">Registra-se</a></p>
                    <div class="container_button" onclick="window.location='{{route('login')}}'">
                        <img src=" {{ asset('assets/images/icons/user_white.svg') }} " alt="user">
                        <p>Minha conta</p>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <div class="content">
        @yield('content')

    </div>

    <footer>

        <div class="container_itens_footer">
            <div class="container_footer_top">
                <div class="container_informations">
                    <div class="container_logo">
                        <img class="logo_footer_mob" src=" {{asset('assets/images/logos/logo_mob.svg')}} " alt="Logo Real Hosting">
                        <a href="{{route('home')}}">
                            <img class="logo_footer_desk" src=" {{asset('assets/images/logos/logo_desk.svg')}} " alt="Logo Real Hosting">
                        </a>
                    </div>
                    <div class="container_about">
                        <p>A empresa tem a intenção de prover o serviço 
                            de hospedagem de servidores, inicialmente de 
                            Minecraft e, posteriormente de vários outros 
                            tipos de jogos, como FiveM, MTA, Minecraft 
                            Bedrock, etc...</p>
                    </div>
                    <div class="container_quality">
                        <p>Qualidades e proteções contra qualquer tipo de
                            ataques em nossos servidores.</p>
                    </div>
                </div>
        
                <div class="container_services_suport">
                    <div class="container_services">
                        <h2>Serviços</h2>
                        <ul>
                            <li>Multi Theft Auto - MTA</li>
                            <li>Minecraft</li>
                            <li>FiveM</li>
                            <li>Minecraft Bedrock</li>
                            <li>Outros</li>
                        </ul>
        
                    </div>
                    <div class="container_suport">
                        <h2>Suporte</h2>
                        <ul>
                            <li>Área do cliente</li>
                            <li>Email</li>
                            <li>Discord</li>
                            <li>Termos e Serviços</li>
                        </ul>
        
                    </div>
                </div>
            </div>
            <div class="container_copy_terms">
                <div class="container_copy">
                    <p>RealHosting Hospedagem Ltda. Copyright © 2021 - {{date('Y')}}</p>
                </div>
                <div class="container_terms">
                    <p>Termos & Políticas</p>
                </div>
            </div>

        </div>

    </footer>
</body>

</html>
