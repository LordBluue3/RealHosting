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

            <form action="{{ route('register') }}" method="POST">
                @csrf
                <input name="name" type="name" placeholder="Nome">
                <input name="email" type="email" placeholder="Email">
                <input id="password" name="password" type="password" placeholder="Senha">
                <input id="confirmPassword" name="confirmPassword" type="password" placeholder="Confirma Senha">
                <div class="container_button">
                    <p>Já tem uma conta? <a href="{{ route('login') }}">Logar</a> </p>
                    <button type="button" onclick="validate()">Cadastrar</button>
                </div>
            </form>

        </div>
    </section>
    <script>
        function validate() {
            password = document.getElementById('password').value;
            confirmPassword = document.getElementById('confirmPassword').value;

            if (password.trim() != confirmPassword.trim()) {
                alert("As senhas estão diferentes");
            }else{
                document.querySelector('form').submit();
            }
        }
    </script>
@endsection
