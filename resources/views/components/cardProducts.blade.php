@push('head')
    @vite(['resources/scss/components/cardProducts.scss'])
@endpush

<div class="card">
    <div class="container_image">
        <img src="{{ asset($image) }}" alt="">
    </div>
    <div class="container_text">
        <h1>{{ $title }}</h1>
    </div>
    <div class="container_plan_price">
        <h2>Planos a partir de</h2>
        <p><strong>R${{ $price }}</strong>/mensal</p>
    </div>
    <div class="container_description">
        <p>{{ $description }}</p>
    </div>
    <div class="container_button">
        <button>Ver todos os planos</button>
    </div>
</div>
