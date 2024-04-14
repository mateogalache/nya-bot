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
            </div>

            {!! Form::submit('Publicar', ['class' => 'create']) !!}

        {!! Form::close() !!}
    </div>
@endsection

@section('js')
<script>
    // Cargar el editor después de que se haya cargado la página
    require.config({ paths: { 'vs': 'https://cdnjs.cloudflare.com/ajax/libs/monaco-editor/0.29.0/min/vs' }});
    require(['vs/editor/editor.main'], function() {
        // Configurar el tema oscuro
        monaco.editor.defineTheme('dark', {
            base: 'vs-dark',
            inherit: true,
            rules: [{ background: '212121' }],
            colors: {}
        });
        // Crear una instancia del editor
        var editor = monaco.editor.create(document.getElementById('editor'), {
            value: '# Escribe tu código aquí...',
            language: 'python', // Establecer el lenguaje por defecto como Python
            theme: 'dark' // Establecer el tema como oscuro
        });

        // Escuchar cambios en el campo de selección
        document.getElementById('language-select').addEventListener('change', function() {
            // Obtener el valor seleccionado
            var selectedLanguage = this.value;
            // Cambiar el lenguaje del editor
            if(selectedLanguage === 'C') {
                monaco.editor.setModelLanguage(editor.getModel(), 'c');
            } else if(selectedLanguage === 'Python') {
                monaco.editor.setModelLanguage(editor.getModel(), 'python');
            }
        });

        // Escuchar cambios en el editor
        editor.onDidChangeModelContent(function() {
            // Obtener el contenido del editor
            var code = editor.getValue();
            // Asignar el código al campo oculto en el formulario
            document.getElementById('code').value = code;
        });
    });
</script>
@endsection
