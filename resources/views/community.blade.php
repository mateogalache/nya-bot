@extends('base')

@section('content')
    <div class="box-principal">
        <h1>COMUNIDAD</h1>
        {!! Form::open(['route' => 'community', 'method' => 'GET']) !!}
            {!! Form::text('termino', $request->termino ?? null, ['placeholder' => 'Buscar...']) !!}
            {!! Form::submit('Buscar') !!}
        {!! Form::close() !!}

        @foreach ($codes as $code)
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

    </div>
@endsection

@section('js')
@endsection
