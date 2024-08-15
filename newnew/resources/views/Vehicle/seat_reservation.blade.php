<!DOCTYPE html>
<html> 
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	<link rel="stylesheet" type="text/css" href="../css/Seat_reservation.css" media="all">
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
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>


   
          
     
	<div class="container-fluid_text-center">   

     <div id="app">
            @include('flash_messages')
            @yield('content')
        </div>
  <div class="row content">

	    <div class="col-sm-2_sidenav">
	      <button class="a"><a href="infopass.html">My_Register</a></button>
	      <br>
	      <button class="b"><a href="Seat_Reservation.html">Seat_Reservation</a></button>
	      <br>
	      <button class="c"><a href="starpass.html">Site_Rating</a></button>
	      <br>
	      <button class="d"><a href="Notification.html">Notification</a></button>
	      <br>
	    </div>
      
 

	    <div class="col-sm-10_text-left"> 
	      <p>Choose The Right Vehicle</p>
          <form role="form" method="post" action="{{route('seat_reservation')}}">
           
             {{ csrf_field() }}
              <hr>
              <div class="a" >
                   
                        <select class="ab" name="vehicle_id"  placeholder="vehicle_id"> 
                             @foreach ($vehicles as $vehicle)
                             <option value ="{{ $vehicle->vehicle_id }}"> {{ $vehicle->vehicle_id }},{{ $vehicle->destination_city}}</option>
                             @endforeach
                        </select>
                        <br>

                        <input type="text" class="ab" name="name_passenger" placeholder="name_passenger" required>
                        <br>

                        <input type="text" class="ab" name="phone" placeholder="phone" required>
                        <br>

                        <input type="Number" class="ab" name="number_seat" placeholder="number_seat"  min="1" max="14" required>
                        <br>
                 
              </div>
              
              <div>
                 <button type="submit" class="save" > Save </button>
             
              </div>
          
        </form>
	    </div>
	    
  </div>
</div>


	<footer class="container-fluid text-center">
        <p>Footer Text</p>
    </footer>

</body>
</html>