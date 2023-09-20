@extends('layouts/app')

@push('head')
@vite(['resources/scss/pages/register.scss'])
@endpush

@section('content')
<section class="section_register">
    <div class="container_register">
        <div class="container_title">
            <h1>Crie sua conta</h1>
        </div>

        <form action="">
            <input type="email" placeholder="Email">
            <input type="password" placeholder="Senha">
            <input type="password" placeholder="Confirma Senha">
            <div class="container_button">
                <p>Já tem uma conta? <a href="{{route('login')}}">Logar</a> </p>
                <button type="submit">Cadastrar</button>
            </div>
        </form>

    </div>
</section>
@endsection
