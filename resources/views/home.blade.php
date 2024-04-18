@extends('base')

@section('content')
    <div class="box-principalhome">
        <div class="homeboxes">
            <div class="homebox">
                <div class="titlehome">
                    <h2>COMUNIDAD</h2>
                    <a href="{{route('community')}}"><span class="material-symbols-outlined">
                        chevron_right
                        </span></a>
                </div>
                <div class="imgdes">
                    <div class="descriptionbox">
                        ¡Descubre códigos creados por la comunidad y guárdalos
                        en tu nya-bot para poder utilizarlo!
                    </div>
                    <div class="imagenbox">
                        <img src="{{asset('images/comunidad.png')}}" alt="comunidad">
                    </div>
                </div>
            </div>
            <div class="homebox">
                <div class="titlehome">
                    <h2>CREAR</h2>
                    <a href="{{route('create')}}"><span class="material-symbols-outlined">
                        chevron_right
                        </span></a>
                </div>
                <div class="imgdes">
                    <div class="descriptionbox">
                        ¡Crea tu propio código y compartelo con la comunidad o
                        guárdatelo para difrutarlo tu sólo!
                    </div>
                    <div class="imagenbox">
                        <img src="{{asset('images/programacion.png')}}" alt="programacion">
                    </div>
                </div>
            </div>
        </div>
        <div class="homebox2">
            <div class="titlehome">
                <h2>COMPRA NYA-BOT</h2>
            </div>
            <div class="imgdes imgdes2">
                <div class="imagenbox2">
                    <img src="{{asset('images/prototipo.png')}}" alt="bot">
                </div>
                <div class="descriptionbox">
                    ¡Crea tu propio código y compártelo con la comunidad o
                    guárdatelo para difrutarlo tu sólo! <br>
                    <h1 class="price">994,99€</h1>
                    <small>OFERTA 24 Horas</small>
                    <button><h1>COMPRAR</h1></button>
                    <small>Envío a domicilio por 4,99€.</small>
                </div>

            </div>
        </div>
    </div>

@endsection
