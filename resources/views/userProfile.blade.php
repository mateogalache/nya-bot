@extends('base')

@section('content')
    <div class="box-principalperfil">
        <h1>Perfil</h1>

        <div class="profile-info">
            <p>Nombre: {{ Auth::user()->name }}</p>
            <p>Email: {{ Auth::user()->email }}</p>


            <h2>Códigos Creados</h2>
            @if (Auth::user()->codes->isEmpty())
                <p>No hay códigos creados.</p>
            @else
                @foreach (Auth::user()->codes as $code)
                    <a href="{{ route('codeshow', $code->id) }}" class="code-link">
                        <div class="codeperfil">
                            <img src="{{ asset("images/{$code->type}.png") }}"  alt="Logo" class="code-logo">
                            <div>
                                <h3>{{ $code->title }}</h3>
                                <p>{{ $code->description }}</p>
                            </div>
                        </div>
                    </a>
                @endforeach
            @endif
        </div>
    </div>
@endsection

@section('js')
@endsection
