@extends('base')

@section('content')
    <div class="box-principal">
        <h1>CREAR</h1>

        {!! Form::open(['route' => 'create']) !!}

            <div class="form-group">
                {!! Form::textarea('code', $request->code, ['class' => 'text', 'placeholder' => 'Código']) !!}
            </div>

            <div class="tdes">
              <div class="form-group">
                {!! Form::text('title', $request->title, ['class' => 'title', 'placeholder' => 'Título']) !!}
            </div>

            <div class="form-group">
                {!! Form::text('description', $request->description, ['class' => 'description', 'placeholder' => 'Descripción']) !!}
            </div>

            <div class="form-group">
                {!! Form::text('keyword', $request->keyword, ['class' => 'keyword', 'placeholder' => 'Palabra clave']) !!}
            </div>

            <div class="form-group">
                {!! Form::select('type', ['C' => 'C', 'Python' => 'Python'], $request->type, ['class' => 'form-control keyword']) !!}
            </div>
            </div>




            <div class="form-group">
                {!! Form::submit('Publicar', ['class' => 'create']) !!}
            </div>

        {!! Form::close() !!}
    </div>
@endsection

@section('js')
@endsection

