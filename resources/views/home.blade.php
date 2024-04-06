
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
        <a href="{{ route('logout') }}" class="btn btn-primary">Cerrar sesión</a>
        <a href="{{ route('profile') }}" class="btn btn-primary">Perfil</a>
    @else
        <a href="{{ route('login') }}" class="btn btn-primary">Iniciar sesión</a>
        <a href="{{ route('register') }}" class="btn btn-secondary">Registrarse</a>
    @endauth
</div>
@endsection
