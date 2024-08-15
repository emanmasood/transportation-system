<!DOCTYPE html>
<html>
<head>
    <title>Driver Login</title>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/login.css')}}" media="all">
</head>
<body>
<div class="sign">
    <h1>Sign in</h1>
    <form class="form-horizontal" method="POST" action="{{ route('driver.login') }}">
        {{ csrf_field() }}
        <input type="email" class="email" name="email" placeholder="Your Email" required>
        <input type="password" class="pass" name="password" placeholder="Your Password" required>
        <hr>
        <p>Don't Have an account ?<a href="{{route('driver.register')}}"> Create</a></p>
        <button type="submit" class="signb">
            Login
        </button>
        <hr>
    </form>
</div>
</body>
</html>
