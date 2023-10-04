@extends('layouts/app')
@push('head')
@vite(['resources/scss/pages/login.scss'])
@endpush

@section('content')
<section class="section_login">
    <div class="container_login">
        <div class="container_title">
            <h1>Entre na sua conta</h1>
        </div>

        <form action="{{route('login')}}" method="POST">
            @csrf
            <input name="email" type="email" placeholder="Email">
            <input name="password" type="password" placeholder="Senha">
            <div class="container_button">
                <p>Não tem uma conta? <a href="{{route('register')}}">Cadastre-se</a> </p>
                <button type="submit">Logar</button>
            </div>
        </form>

    </div>
</section>
@endsection
