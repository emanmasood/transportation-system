<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/infopass.css')}}" media="all">
</head>
<body>


<div class="container-fluid_text-center">
    <div class="row content">
        <div class="col-sm-12_text-left">
            <p>ENTER YOUR INFORMATION</p>
            <hr>
            <form action="{{route('admin.register')}}" method="POST">
                {{ csrf_field() }}
                <input type="text" class="n" name="name" placeholder="name" required>
                <br>
                <input type="email" class="n" name="email" placeholder="email" required>
                <br>
                <input type="password" class="n" name="password" placeholder="password" required>
                <br>
                <input type="password" class="cn" name="password-confirmation" placeholder="confirm password"  required>
                <br>
                <button type="submit" class="save" > Save </button>
            </form>
        </div>
    </div>
</div>



</body>
</html>
