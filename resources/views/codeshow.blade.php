@extends('base')

@section('content')
    <div class="box-principalcodeshow">
        <h2>{{ $code->title }}</h2>

        <div class="code-detailscodeshow">
            <p>{{ $code->description }}</p>
            <pre class="preCode"><code>{{ $code->code }}</code>
                <!-- Contenedor para botones -->
                <div class="button-container">
                    <!-- Botón de copiar -->
                    <button id="copyButton" class="copy-button">
                        <span class="material-symbols-outlined">content_copy</span>
                        <span id="copyMessage" style="display: none; color: green;">Copiado</span>
                    </button>
                    <!-- Botón de editar -->
                    <button id="editButton" class="edit-button">
                        <span class="material-symbols-outlined">edit</span> <!-- Icono de edición -->
                    </button>
                </div>
            </pre>
            <!-- Formulario para editar código -->
            <form id="editForm" method="POST" action="{{ route('code.edit', $code->id) }}" style="display: none;">
                @csrf
                <div class="form-group">
                    <label for="editedCode">Editar Código:</label>
                    <textarea class="form-control" id="editedCode" name="editedCode" rows="5">{{ $code->code }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            </form>

            <!-- Formulario para enviar código a Raspberry Pi -->
            {!! Form::open(['route' => ['codeshow', $code->id], 'method' => 'POST']) !!}
                {!! Form::hidden('title', $code->title) !!}
                {!! Form::hidden('type', $code->type) !!}
                {!! Form::hidden('code', $code->code) !!}
                {!! Form::hidden('keyword', $code->keyword) !!}
                {!! Form::submit('Enviar código a Raspberry Pi', ['class' => 'btn btn-success']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection

@section('js')
    <script>
        // Función para copiar el contenido del elemento <pre> al portapapeles
        function copyCodeToClipboard() {
            var codeElement = document.querySelector('.preCode code');
            var codeText = codeElement.textContent || codeElement.innerText;

            // Crea un elemento de texto temporal para copiar el código
            var tempElement = document.createElement('textarea');
            tempElement.value = codeText;
            document.body.appendChild(tempElement);

            // Selecciona y copia el texto dentro del elemento temporal
            tempElement.select();
            document.execCommand('copy');
            document.body.removeChild(tempElement);

            // Muestra el mensaje de éxito
            var copyMessage = document.getElementById('copyMessage');
            copyMessage.style.display = 'inline';

            // Oculta el mensaje después de 2 segundos
            setTimeout(function() {
                copyMessage.style.display = 'none';
            }, 2000);
        }

        // Función para mostrar el formulario de edición al hacer clic en el botón de editar
        function showEditForm() {
            document.getElementById('editForm').style.display = 'block';
        }

        // Agrega un evento de clic al botón de copiar
        document.getElementById('copyButton').addEventListener('click', function() {
            copyCodeToClipboard();
        });

        // Agrega un evento de clic al botón de editar
        document.getElementById('editButton').addEventListener('click', function() {
            showEditForm();
        });

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
