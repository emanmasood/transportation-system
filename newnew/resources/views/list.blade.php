<!DOCTYPE html>
<html>
<head>
  
	
	<title>list view</title>
</head>
<body>
 <form action="" method="post">
   
   <p>enter the values</p>

  @foreach($reservations  as $reservation)
       <th>{{$reservation->vehicle_id}}</th>
       <th>{{$reservation->numseat}}</th>
          
  @endforeach  
  </form>             
 
</body>
</html>