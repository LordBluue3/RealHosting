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

    </footer>
</body>

</html>
