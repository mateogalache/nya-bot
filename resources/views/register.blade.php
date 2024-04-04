@extends('base')

@section('content')

    <div class="box-principal">
    <h2>User Registration</h2>
    <form action="register.php" method="POST">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        
        <label for="confirm_password">Confirm Password:</label><br>
        <input type="password" id="confirm_password" name="confirm_password" required><br><br>
        
        <input type="submit" value="Register">
    </form>
    </div>

@endsection

@section('js')
@endsection
