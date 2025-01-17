@extends('site.layouts.app')

@section('site_content')
  <div class="p-4">
    <h2 class="mb-4 font-bold">Nossos Produtos</h2>
    <div class="row g-4">
        {{-- @foreach($products as $product)
        <div class="col-sm-6 col-lg-4 col-xl-3 d-flex align-items-stretch justify-content-center">
            <div class="card shadow d-flex flex-column justify-content-center" style="height: 100%;">
                <img src="{{ asset('storage/images/' . $product->main_image) }}" class="card-img-top img-fluid" alt="{{ $product->name }}" style="object-fit: cover; height: 200px;">
                <hr>    
                <div class="card-body d-flex flex-column justify-content-around">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text">{{ 'R$ ' . number_format($product->price, 2, ',', '.') }}</p>
                    <a href="{{ route('site.show.product', $product->id) }}" class="btn btn-success mt-2 align-self-center">Comprar</a>
                </div>
            </div>
        </div>
        @endforeach --}}
    </div>
</div>
@endsection
  
