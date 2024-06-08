<?php include("join.php"); ?>

<html>
<head>

<title></title>
<link rel="stylesheet" type="text/css" href="style1.css">s
<style>
  body {
    font-family: Arial, sans-serif;
  }
  .container {
    width:40%;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    margin-top:2%;
    margin-bottom:3%;
  }
  .form-group {
    margin-bottom: 20px;
  }
  .form-group label {
    display: block;
    margin-bottom: 5px;
  }
  .form-group input {
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 3px;
  }

  .form-group  select{
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 3px;
  }
  
  input[type="submit"] {
    padding: 8px 20px;
    background-color: #4CAF50;
    color: #fff;
    border: none;
    border-radius: 3px;
    cursor: pointer;
    width: 100%;
   
}

nav{
    width: 100%;
    height: 20%;   
    box-shadow: 2px 0px 5px grey;
    display:flex;
    justify-content: space-around;
    align-items: center;
    background-color:black;
    
}

.menu a{
        
        text-decoration: none;
        font-size: 15px;
        color:white;
        padding:10px 40px;
        margin:8px;
        font-weight: bold;
        letter-spacing: 0.1rem;
        font-style: italic;
       
}
</style>
</head>
<body>

<nav>
        <div class="login"><img src="logo.png" height="100px" width="150px"></div>
       <div class="menu">
       <a href="http://localhost/final/first.php">Home</a>
            <a href="http://localhost/final/cars.php">Cars</a>
            <a href="http://localhost/final/aboutUs.php">About Us</a>
            <a href="http://localhost/final/contact.php">Book Now</a>
            <a href="http://localhost/final/cancelbook.php">Booking Cancel</a>
            <a href="http://localhost/final/signin.php">SignOut</a>
        </div>
      </nav>


<div class="container">
  <center><h2>Car Booking Cancellation</h2></center>
  <form id="cancelForm" method="POST" action="">
   

    <div class="form-group">
      <label for="bookingId">Customer Name:</label>
      <input type="text"  name="name" required>
    </div>

    <div class="form-group">
      <label for="bookingId">Customer Email:</label>
      <input type="text"  name="email" required>
    </div>

    <div class="form-group">
      <label for="bookingId">Customer Phone:</label>
      <input type="text"  name="phone" required>
    </div>

    <div class="form-group">
    <label for="carSelect">Select Car:</label><br>
    <select id="carSelect" name="carSelect">
        <option value="Not Select">Select Car</option>
        <option value="inova crysta">inova crysta</option>
        <option value="Mahindra Scorpio">Mahindra Scorpio</option>
        <option value="Swift">Swift</option>
        <option value="Suzuki Vitara">Suzuki Vitara</option>
        <option value="Maruti Alto">Maruti Alto</option>
        <option value="Suzuki Wagon R">Suzuki Wagon R</option>
        <option value=""></option>
        <option value=""></option>
        <option value="TATA PUNCH CNG">TATA PUNCH CNG</option>
        <option value="Hyundai Exter CNG">Hyundai Exter CNG</option>
        <option value="Maruti Alto K10 CNG">Maruti Alto K10 CNG</option>
        <option value="Maruti S-Presso CNG">Maruti S-Presso CNG</option>
        <option value="Bajaj Qute(RE60) CNG">Bajaj Qute(RE60) CNG</option>
        <option value="Toyota Glanza CNG">Toyota Glanza CNG</option>
    </select>
</div>

    <div class="form-group">
      <label for="reason">Reason for cancellation:</label>
      <input type="text"  name="reason" required>
    </div>

    <input type="submit" name="done" value="Cancel Booking">
  </form>
</div>




  
<div class="endd">

<center><img src="logo.png" height="20%"></center>
</div>


<div class="end">

 <div class="end1">
  <h1 style="color: white;">About US</h1><br><br<br><br><br>
  <h4 style="color: rgb(179, 183, 183);">Bombay Luxury Car Rental<br> your premium car rental<br> destination in mumbai</h4>
 </div>

 <div class="end2">
  <h1 style="color: white;">Contact Info</h1><br><br><br>
  <h4 style="color: rgb(179, 183, 183);">Bombay Luxury Car rental,<br>
    Shop No. 1,Opposite IIM Mumbai,<br>
    SV Road, Powai, 400087

    <br><br>
    hello@bombayluxurycarrental.com<br><br>
    Phone: +91 9529735103</h4>
 </div>

 <div class="end3">
  <h1 style="color: white;">Quick Link</h1><br><br><br>
  <a href="http://localhost/final/first.php">Home</a><br><br>
  <a href="http://localhost/final/cars.php">Cars</a><br><br>
  <a href="http://localhost/final/aboutUs.php">About Us</a><br><br>
  <a href="http://localhost/final/contact.php">Book Now</a><br><br>
  <a href="http://localhost/final/cancelbook.php">cancel booking</a><br><br>
  <a href="http://localhost/final/signin.php">SignOut</a>
 </div>

 <div class="end4">
  <h1 style="color: white;">Working Hours</h1><br><br><br>

  <h4 style="color: rgb(179, 183, 183);">Mon to Fri: 09.00 AM to 09.00 PM<br><br>
    Sat & Sun: 09.00 AM to 06.00 PM</h4><br><br><br><br>

    <a href="http://localhost/final/contact.php"><button>BOOK NOW</button></a>
 </div> 

</div>

</body>
</html>


<?php

if($_POST['done'])
{
  $name          =  $_POST['name'];
  $email         =  $_POST['email'];
  $phone         =  $_POST['phone'];
  $carSelect     =  $_POST['carSelect'];
  $reason        =  $_POST['reason'];
 

  $query = "INSERT INTO cancelbook values('$name','$email','$phone','$carSelect','$reason')";
  $data =mysqli_query($conn,$query);

  if($data)
  {
   
   // echo "data insert";
  }

  else{
    echo "no insert data";
  }

}
?>