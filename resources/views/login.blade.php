@extends('base')

@section('content')

<div class="box-principal1">
        <h2>User Login</h2>
        <form action="{{ route('login') }}" method="POST">
            @csrf

            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required><br><br>

            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" required><br><br>



            <input type="submit" value="Login">
        </form>
    </div>

@endsection

@section('js')
@endsection
