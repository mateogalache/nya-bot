<div class = "header">
    <a href="/">
        <img src="{{ asset('images/logo_companyy.png') }}" alt="NYA-BOT" class="logo">
    </a>
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
</div>
