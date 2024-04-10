@extends('base')

@section('content')
    <div class="box-principal">
        <h1>COMUNIDAD</h1>
        {!! Form::open(['route' => 'community', 'method' => 'GET', 'class' => 'search-community']) !!}
            {!! Form::text('termino', $request->termino ?? null, ['placeholder' => 'Buscar...', 'class' => 'buscar']) !!}
            {!! Form::button('<span class="material-symbols-outlined">search</span>', ['type' => 'submit', 'class' => 'search', 'id' => 'searchButton']) !!}
        {!! Form::close() !!}

        <div class="allcodes" style="max-height: 500px; overflow-y: auto; max-width: 620px;">
            @foreach ($codes as $code)
        @php
            $user = $user->where('id',$code->user_id)->first();
        @endphp
            <a href="{{ route('codeshow', $code->id) }}" class="codeperfil">
                <small class="userCode">{{$user->name}}</small>
                <img src="{{ asset("images/{$code->type}.png") }}"  alt="Logo" class="code-logo">
                <div>
                    <h3>{{ $code->title }}</h3>
                    <p>{{ $code->description }}</p>

                </div>
            </a>
        </a>
        @endforeach
        </div>




    </div>
@endsection

@section('js')
@endsection
