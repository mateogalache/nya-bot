@extends('base')

@section('content')
    <div class="box-principal">
        <h1>COMUNIDAD</h1>
        {!! Form::open(['route' => 'community', 'method' => 'GET']) !!}
            {!! Form::text('termino', $request->termino ?? null, ['placeholder' => 'Buscar...']) !!}
            {!! Form::submit('Buscar') !!}
        {!! Form::close() !!}

        @foreach ($codes as $code)
            {{-- Construir la URL de la imagen usando la variable $code->type --}}
            <img src="{{ asset("images/{$code->type}.png") }}" alt="">
            {{$code->title}}
            {{$code->description}}
        @endforeach

    </div>
@endsection

@section('js')
@endsection
