<!DOCTYPE html>

<html>

<head>
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    @vite(['resources/scss/app.scss'])
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
                    <img src=" {{ asset('assets/images/logos/logo_desk.svg') }} " alt="Logo Real Hosting">
                </div>

                <ul>
                    <li>ínicio</li>
                    <li>Hospedagem</li>
                    <li>Servidores</li>
                    <li>Suporte</li>
                    <li>Outros</li>
                </ul>

                <div class="container_register_my_accont">
                    <p>Registra-se</p>
                    <div class="container_button">
                        <img src=" {{ asset('assets/images/icons/user_white.svg') }} " alt="user">
                        <p>Minha conta</p>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <footer>

        <div class="container_itens_footer">
            <div class="container_footer_top">
                <div class="container_informations">
                    <div class="container_logo">
                        <img src=" {{asset('assets/images/logos/logo_mob.svg')}} " alt="Logo Real Hosting">
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
                    <p>RealHosting Hospedagem Ltda. Copyright © 2021 - 2022</p>
                </div>
                <div class="container_terms">
                    <p>Termos & Políticas</p>
                </div>
            </div>

        </div>

    </footer>
</body>

</html>
