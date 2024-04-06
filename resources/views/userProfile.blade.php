@extends('base')

@section('content')
    <div class="box-principalperfil">
        <h1>Perfil</h1>

        <div class="profile-info">
            <p>Nombre: {{ Auth::user()->name }}</p>
            <p>Email: {{ Auth::user()->email }}</p>
            <!-- Aquí puedes agregar más campos de información del usuario si los tienes -->

            <h2>Códigos Creados</h2>
            @if (Auth::user()->codes->isEmpty())
                <p>No hay códigos creados.</p>
            @else
                @foreach (Auth::user()->codes as $code)
                    <div class="codeperfil">
                        <h3>{{ $code->title }}</h3>
                        <p>{{ $code->description }}</p>
                        <!-- Aquí puedes mostrar más información sobre el código si lo deseas -->
                    </div>
                @endforeach
            @endif
        </div>
    </div>
@endsection

@section('js')
@endsection
