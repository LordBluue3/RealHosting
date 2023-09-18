@extends('layouts/app')

@push('head')
    @vite(['resources/scss/pages/products.scss'])
@endpush

@section('content')
    @include('components.titleServices', $data)

    <section class="section_cards">
       <div class="container_cards">
        @include('components.cardProducts', $product )
        @include('components.cardProducts', $product )
        @include('components.cardProducts', $product )
        @include('components.cardProducts', $product )
        @include('components.cardProducts', $product )
        @include('components.cardProducts', $product )
       </div>
    </section>
@endsection
