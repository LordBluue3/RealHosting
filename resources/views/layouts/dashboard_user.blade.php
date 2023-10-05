<!DOCTYPE html>

<html lang="pt-br">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/scss/layout/dashboard.scss'])
    @stack('head')
</head>
<body>
    <header>
        <div> 
            <div>
                <img style="width: 100px" src="{{ asset('assets/images/logos/logo_isotipo.png') }}" alt="">
            </div>
            <ul>
                <li>a</li>
                <li>b</li>
                <li>c</li>
                <li>d</li>
                <li>e</li>
            </ul>
        </div>
    </header>
    <div class="content">
        @yield('content')
    </div>
    
</body>
</html>