<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/project1.css')}}" media="all">
</head>
<body>


<div class="container-fluid_text-center">
    <div class="row content">
        <div class="col-sm-12_text-left">
            <h1>WELCOME</h1>
            <hr>
            <p class="user">Choose Once Of User</p>
            <br>
            <form action="{{route('checktype')}}">
                <div class="admin">
                    <input id="d" type="radio" name="user" value="admin" required>
                    <label for="d">Admin</label>
                </div>
                <br>
                <div class="driv">
                    <input id="d" type="radio" name="user" value="driver" required>
                    <label for="d">Driver</label>
                </div>
                <br>
                <div class="pass">
                    <input id="s" type="radio" name="user" value="passenger" required>
                    <label for="s">Passenger</label>
                </div>
                <br>
                <br>
                <div class="sub">
                    <button type="submit" class="save"> Go To Login</button>
                </div>
            </form>
        </div>
    </div>
</div>


</body>
</html>

