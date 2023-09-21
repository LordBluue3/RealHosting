@extends('layouts/app')

@push('head')
    @vite(['resources/scss/pages/products.scss'])
@endpush

@section('content')
    @include('components.titleServices', $data)
    <section class="section_cards">
        <div class="container_cards">
            @for ($i = 0; $i <= 6; $i++)
                @include('components.cardProducts', $specificProduct)
            @endfor
        </div>
    </section>
@endsection
