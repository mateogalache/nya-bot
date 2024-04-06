
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
                    <h3>CODIGO</h3>
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
    <div class="auth-links">
    @auth
        <a href="{{ route('logout') }}" class="btn btn-primary"><span class="material-symbols-outlined">
            logout
            </span></a>
        <a href="{{ route('profile') }}" class="btn btn-primary"><span class="material-symbols-outlined">
            person
            </span></a>
    @else
        <a href="{{ route('login') }}" class="btn btn-primary">INICIAR SESIÓN</a>
    @endauth
</div>
@endsection
