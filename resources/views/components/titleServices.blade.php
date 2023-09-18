@push('head')
    @vite(['resources/scss/components/titleServices.scss'])
@endpush

<section class="section_services">
  <div class="container_title_text">
    <div class="container_title">
        <h1>{{$title}}</h1>
    </div>
    <div class="container_text">
        <p>{{$text}}</p>
    </div>
  </div>
</section>
