

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/info.css')}}" media="all">
</head>
<body>



   <div class="app">
        @include('flash_messages')
        @yield('content')
    </div>     
<div class="container-fluid_text-center">

    <div class="row content">
         <div class="col-sm-12_text-left">
         
            <h1>Sign in</h1>
            <form action="{{route('driver.login')}}" method="POST">
                {{ csrf_field() }}
                <input type="email" class="email" name="email" placeholder="Your Email" required>
                <input type="password" class="pass" name="password" placeholder="Your Password" required>
                <button type="submit" class="signb"> Sign in</button>
                <hr>
                <p>Do you have an account?<a href="{{route('driver.get.register')}}">Sign up</a></p>
            </form>
        </div>
    </div>
</div>



</body>
</html>
