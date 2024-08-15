<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/regpass.css')}}" media="all">
</head>
<body>
<div class="infopass">
    <p>Enter Your Information</p>
    <hr>
    <form method="POST" action="{{ route('register') }}">
        {{ csrf_field() }}
        <input type="text" class="n" name="name" placeholder="Enter You Name" required>
        <br>
        <input type="email" class="n" name="email" placeholder="Enter You email" required>
        <br>
        <input type="password" class="n" name="password" placeholder="Enter You password" required>
        <br>
        <input type="password" class="n" name="password_confirmation" placeholder="Enter You password Again" required>
        <br>
        <input type="text" class="cn" name="mobile" placeholder="Enter You mobile" required>
        <br>
        <button type="submit" class="save">Save</button>
    </form>
</div>
</body>
</html>
