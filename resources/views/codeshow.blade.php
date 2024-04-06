@extends('base')

@section('content')
    <div class="box-principalcodeshow">
        <h2>{{ $code->title }}</h2>

        <div class="code-detailscodeshow">
            <p>{{ $code->description }}</p>
            <pre class="preCode"><code>{{ $code->code }}</code>
                <!-- Botón de copiar -->
                <button id="copyButton" class="copy-button">
                    <span class="material-symbols-outlined">content_copy</span>
                    <span id="copyMessage" style="display: none; color: green;">Copiado</span>
                </button>
            </pre>
            {!! Form::open(['route' => ['codeshow', $code->id], 'method' => 'POST']) !!}

                    {!! Form::hidden('title', $code->title) !!}
                    {!! Form::hidden('type', $code->type) !!}
                    {!! Form::hidden('type', $code->code) !!}
                {!! Form::submit('Enviar código a Raspberry Pi', ['class' => 'btn btn-primary']) !!}
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

        // Agrega un evento de clic al botón de copiar
        document.getElementById('copyButton').addEventListener('click', function() {
            copyCodeToClipboard();
        });
    </script>
@endsection
