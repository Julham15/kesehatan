<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
    <form action="{{ route('register')}}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Name"><br>
        <input type="email" name="email" placeholder="Email"><br>
         <input type="role" name="name" placeholder="role"><br>
        <input type="password" name="password" placeholder="Password"><br>
        <input type="password" name="password_confirmation" placeholder="Confirm Password"><br>
        <button type="submit">Register</button><br>
        <p>or</p>
        <a href="{{route('login')}}">Login</a> </form>
</body>
</html>