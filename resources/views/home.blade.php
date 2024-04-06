
@extends('base')

@section('content')
    <div class="box-principalhome">

        <div class="sectionshome">
            <div class="sectionhome">
                <button class="section-buttonhome" onclick="location.href='/shop'">
                    <img src="{{ asset('images/prototipo.png') }}" alt="Prototipo" class="section-imghome">
                    <h3>TIENDA</h3>
                </button>
            </div>
            <div class="sectionhome">
                <button class="section-buttonhome" onclick="location.href='/create'">
                    <img src="{{ asset('images/programacion.png') }}" alt="Programación" class="section-imghome">
                    <h3>CÓDIGO</h3>
                </button>
            </div>
            <div class="sectionhome">
                <button class="section-buttonhome" onclick="location.href='/community'">
                    <img src="{{ asset('images/comunidad.png') }}" alt="Comunidad" class="section-imghome">
                    <h3>COMUNIDAD</h3>
                </button>
            </div>
        </div>
    </div>

@endsection
