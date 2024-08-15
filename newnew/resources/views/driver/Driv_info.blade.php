
<!DOCTYPE html>
<html> 
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/Driv_info.css" media="all">
</head>
<body>

	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Projects</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{route('driver.logout')}}"><span class="glyphicon glyphicon-log-in"></span> logout</a></li>
      </ul>
    </div>
  </div>
</nav>

	<div class="container-fluid_text-center">    
  <div class="row content">
	    <div class="col-sm-2_sidenav">
	      <button class="a"><a href="{{route('driver.addvehicle')}}">Add_Vehicle</a></button>
	      <br>
	      <button class="b"><a href="{{route('driver.show')}}">Pass_Info</a></button>
	      <br>
	      <button class="c"><a href="star.html">Site_Rating</a></button>
	      <br>
	      <button class="d"><a href="Send_Message.html">Send_Message</a></button>
	      <br>
	    </div>
	    <div class="col-sm-10 text-left"> 
	     <div class="rej_driver">
	     	
	     </div>
	    </div>
	    
  </div>
</div>


	<footer class="container-fluid text-center">
        <p>Footer Text</p>
    </footer>

</body>
</html>