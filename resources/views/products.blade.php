@extends('layouts.main')

@section('content')
    <div class="cardbox container">
        @foreach ($products as $product)
            <div class="card">
                <div class="card-img">
                    <img src="/img/{{ $product['frontImage'] }}" alt="card1">
                    <img class="product-hover" src="/img/{{ $product['backImage'] }}" alt="1hover">
                    <!-- heart -->
                    <div class="favorite">
                        <i class="fa-solid fa-heart"></i>
                    </div>
                    <!-- badges -->
                    <div class="badge-box">
                        @foreach ($product['badges'] as $badge)
                            @if ($badge['type'] === 'discount')
                                <!-- discount -->
                                <div class="discount">{{ $badge['value'] }}</div>
                            @endif
                            @if ($badge['type'] === 'tag' && $badge['value'] === 'Sostenibilità')
                                <!-- sostenibility -->
                                <div class="sostenibility">{{ $badge['value'] }}</div>
                            @endif
                        @endforeach
                    </div>
                </div>
                <div class="card-text">
                    <h3>brand</h3>
                    <h2>nome</h2>
                    <span class="new-price">prezzo€</span>
                    <span class="old-price">29.99 €</span>
                </div>
            </div>
        @endforeach


    </div>
@endsection
