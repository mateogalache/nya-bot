@extends('base')

@section('content')
    <div class="box-principalcodeshow">
        <h1>CODE SHOW</h1>

        <div class="code-detailscodeshow">
            <h2>{{ $code->title }}</h2>
            <p>{{ $code->description }}</p>
            <pre><code>{{ $code->code }}</code></pre>
            

           
            <button type="submitcodeshow" class="btn btn-primary">Enviar código a Raspberry Pi</button>
            
        </div>
    </div>
@endsection

@section('js')
@endsection
