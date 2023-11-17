@php
    $products = config('products');
@endphp

@extends('layout.main')

@section('content')
    <div class="card-container container d-flex flex-wrap justify-content-between">

        @foreach ($products as $product)

           <div class="card">
                <div class="contenuto-card">

                    <div class="image-card">
                      <img class="first-img"  src="{{Vite::asset('resources/img/' . $product['frontImage'])}}" alt="item">
                       <img class="second-img" src="{{Vite::asset('resources/img/'. $product['backImage'])}}" alt="item">
                    </div>

                    <div class="discount">

                        @foreach ($product['badges'] as $badge )
                           <span class="{{$badge['type'] == 'tag' ? 'discount-green' : 'discount-red'}}">{{$badge['value']}}</span>
                        @endforeach
                    </div>

                    <div class="heart">
                      <span>&hearts;</span>
                    </div>

                </div>
                <div class="text">
                    <span>{{ $product['brand']}}</span>
                    <span>{{ $product['name']}}</span>
                </div>

                <div class="prezzo">



                </div>

            </div>

        @endforeach

    </div>
@endsection
