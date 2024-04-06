@extends('base')

@section('content')
    <div class="box-principal">
        <h1>CREAR</h1>

        {!! Form::open(['route' => 'create']) !!}

            <div class="form-group">
                {!! Form::textarea('code', $request->code, ['id' => 'code', 'class' => 'text', 'placeholder' => 'Código']) !!}

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
                {!! Form::select('type', ['C' => 'C', 'Python' => 'Python'], $request->type, ['id' => 'language-select', 'class' => 'form-control keyword']) !!}
            </div>
            </div>

            <div class="form-group">
                {!! Form::submit('Publicar', ['class' => 'create']) !!}
            </div>

        {!! Form::close() !!}
    </div>
@endsection

@section('js')
<script>
    var editor = CodeMirror.fromTextArea(document.getElementById("code"), {
        lineNumbers: true,
        indentUnit: 4,
        theme: "default",
        mode: "python" // Modo inicial para Python
    });

    // Evento para detectar cambios en el selector de lenguaje
    document.getElementById('language-select').addEventListener('change', function () {
        var mode = this.value === 'C' ? 'text/x-csrc' : 'python';
        editor.setOption("mode", mode);
    });
</script>



@endsection

