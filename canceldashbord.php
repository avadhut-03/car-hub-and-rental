<html lang="en">
<head>
   
    <title>Dashboard</title>
    <style>

		* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

table{
  max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}

body {
    font-family: Arial, sans-serif;
}

.dashboard-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}

.header {
    background-color: #333;
    color: #fff;
    padding: 10px;
    text-align: center;
}

.navigation ul {
    list-style: none;
}

.navigation ul li {
    display: inline-block;
    margin-right: 20px;
}

.navigation ul li a {
    color: #fff;
    text-decoration: none;
}

#print-button {
    
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin-left: 85%;
    cursor: pointer;
  }





	</style>
</head>
<body>

<div class="dashboard-container">

    <header class="header">
        <h1>BOOKING CARS</h1>
        <nav class="navigation">
            <ul>
                
            <li><a href="http://localhost/final/signindashbord.php">SignIn</a></li>
                <li><a href="http://localhost/final/signupdashbord.php">SignUp</a></li>
                <li><a href="http://localhost/final/dashbord.php">Car Bookings</a></li>
                <li><a href="http://localhost/final/canceldashbord.php">Cancel Bookings</a></li>
				
            </ul>
               
            </ul>
        </nav>
   
</header>
</div>


</body>
</html>



<?php include("join.php");


$query ="SELECT * FROM   cancelbook";
$data = mysqli_query($conn,$query );

$total= mysqli_num_rows($data);


echo $result["name"]." ".$result["Email"]." ".$result["phone"]." ".$result["selectcar"]." ".$result["reason"];


if($total !=0)
{

  ?>




<table border="5px" cellspacing="10" width="100%" height="50%">
    <tr  style="background-color:grey" height="30%" >
      <th width="15%">NAME</th>
     <th width="20%">EMAIL</th>
     <th width="10%">PHONE</th>
     <th width="15%"> CAR NAME</th>
     <th width="10%">REASON</th>
</tr>


<?php

  while($result= mysqli_fetch_assoc($data))
  {
   echo " <tr>
          <td>".$result["name"]."</td>
          <td>".$result["Email"]."</td>
          <td>".$result["phone"]."</td>     
          <td>".$result["selectcar"]."</td>         
           
          <td>".$result["reason"]."</td>     
        </tr>
        ";
  }
}






?>

</table><br><br><br>

<!-- Button to trigger printing -->
<button id="print-button"><img src="bike image/print-button.png" height="50px" ></button>

<script>
  // JavaScript to handle printing when the button is clicked
  document.getElementById("print-button").addEventListener("click", function() {
    window.print();
  });
</script>
