<div class = "header">
    <div class="sections">
        <a href="/">COMPRA</a>
        <a href="{{route('create')}}">CREAR</a>
        <a href="{{route('community')}}">COMUNIDAD</a>
    </div>
    <a href="/">
        <img src="{{ asset('images/logo_companyy.png') }}" alt="NYA-BOT" class="logo">
    </a>
    <div class="auth-links">
        @auth
        <input type="checkbox" id="profile_toggle" class="profile_toggle_checkbox">
        <label for="profile_toggle" class="profile_header">
            <img class="img_profile" src="{{ Auth::user()->img ? asset('images/' . Auth::user()->img) : asset('images/prototipo.png') }}" alt="profile_image">
            <span class="material-symbols-outlined" style="position:absolute; bottom:-.3rem; right:-.5rem;">
                expand_more
            </span>
            <div class="navigation_profile">
                <a href="{{ route('profile') }}">PROFILE</a>
                <a href="{{ route('logout') }}">LOGOUT</a>
                <a href="">NYA-BOT</a>
                <a href="/doc">DOCUMENTACIÓN</a>
                <a href="">CONTÁCTANOS</a>
            </div>
        </label>

        @else
            <a href="{{ route('login') }}" class="btn btn-primary" style="width: 10rem;">INICIAR SESIÓN</a>
        @endauth
    </div>
</div>
