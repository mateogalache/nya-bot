@extends('base')

@section('content')

    <div class="box-principal">
        <h1>TIENDA</h1>
        <div class = "products">
            <div class="product-shop">
                <img src="{{asset('images/pink.png')}}" alt="" class="product-img">
                <h3>ROSA</h3>
            </div>
            <div class="product-shop">
                <img src="{{asset('images/tiger.png')}}" alt="" class="product-img">
                <h3>TIGRE</h3>
            </div>
            <div class="product-shop">
                <img src="{{asset('images/pikachu.png')}}" alt="" class="product-img">
                <h3>PIKACHU</h3>
            </div>
            <div class="product-shop">
                <img src="{{asset('images/salle.png')}}" alt="" class="product-img">
                <h3>LA SALLE</h3>
            </div>
        </div>
    </div>

@endsection

@section('js')
@endsection
