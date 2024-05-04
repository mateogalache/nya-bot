@extends('base')

@section('content')
    <div class="box-principal">
        <h1>CREAR</h1>
        {!! Form::open(['route' => 'create','class' => 'createForm']) !!}

            <!-- Editor de Monaco -->
            <div id="editor" style="height: 500px;"></div>
            <!-- Campo oculto para almacenar el código -->
            {!! Form::hidden('code', null, ['id' => 'code']) !!}

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

                <!-- Campo de selección para elegir el lenguaje -->
                <div class="form-group">
                    {!! Form::select('type', ['Python' => 'Python','C' => 'C'], $request->type, ['id' => 'language-select', 'class' => 'form-control keyword']) !!}
                </div>
                <div class="form-group">
                    {!! Form::select('private', [false => 'Público',true => 'Privado'], $request->private, ['id' => 'privacy-select', 'class' => 'form-control keyword']) !!}
                </div>
            </div>

            {!! Form::submit('Publicar', ['class' => 'create']) !!}

        {!! Form::close() !!}
        {!! Form::open(['route' => 'send','class' => 'createForm']) !!}
            {!! Form::submit('Enviar a la placa', ['class' => 'send bg-primary']) !!}
        {!! Form::close() !!}
    </div>
@endsection

@section('js')
<script>

</script>
@endsection
