@extends('base')

@section('content')
    <div class="box-principalperfil">
        <h1>Perfil</h1>

        <div class="profile-container">
            <div class="profile-info">
                <div class="profile-details">
                    <p>Nombre: {{ Auth::user()->name }}</p>
                    <p>Email: {{ Auth::user()->email }}</p>
                </div>
            </div>

            <div class="codes-created"style="max-height: 400px; overflow-y: auto;">
                <h2>Códigos Creados</h2>
                <div class="form-group">
                    {!! Form::select('private', [false => 'Público',true => 'Privado'], $request->private, ['id' => 'privacy-select', 'class' => 'form-control keyword']) !!}
                </div>
                <div class="codes">
                    @if (Auth::user()->codes->isEmpty())
                        <p>No hay códigos creados.</p>
                    @else
                        @foreach (Auth::user()->codes->where('private',$request->private)->sortByDesc('created_at') as $code)

                            <a href="{{ route('codeshow', $code->id) }}" class="codeperfil">
                                <img src="{{ asset("images/{$code->type}.png") }}"  alt="Logo" class="code-logo">
                                <div>
                                    <h3>{{ $code->title }}</h3>
                                    <p>{{ $code->description }}</p>
                                </div>
                            </a>

                        @endforeach
                    @endif
                </div>

            </div>
        </div>
    </div>
@endsection

@section('js')
<script>
    document.getElementById('privacy-select').addEventListener('change', function() {
        var selectedValue = this.value;
        window.location.href = '{{ route("profile") }}?private=' + selectedValue;
    });
</script>

@endsection
