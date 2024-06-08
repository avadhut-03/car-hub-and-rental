<?php include("join.php"); ?>


<html lang="en">
<head>

<title>Car Booking Form</title>

<style>

body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
  
}

.small{
    width:50%;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    margin-top:2%;
    margin-bottom:2%;
}

form {
    max-width: 400px;
    margin: 0 auto;
}

label {
    display: block;
    margin-bottom: 5px;
}

input[type="text"],
input[type="email"],
input[type="tel"],
select,
input[type="date"],
input[type="time"],
input[type="submit"] {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    border: none;
    cursor: pointer;
   
}

input[type="submit"]:hover {
    background-color: #45a049;
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

.select option{
    width:1px;
}



</style>

<link rel="stylesheet" type="text/css" href="style1.css">
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
      
  <div class=big>  
<div class="small">
<center><h2>CAR BOOKING FORM</h2></center>

    <form id="carBookingForm"  method="POST" action="">
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name"  required><br>

    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email"  required><br>

    <label for="phone">Phone:</label><br>
    <input type="tel" id="phone" name="phone" required><br>

    <label for="location">Location:</label><br>
    <input type="text" id="location" name="location" required><br>

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
    </select><br>

    <label for="pickupDate">Pickup Date:</label><br>
    <input type="date" id="pickupDate" name="pickupDate" required><br>

    <label for="pickupTime">Pickup Time:</label><br>
    <input type="time" id="pickupTime" name="pickupTime" required><br><br>

    <input type="submit" value="Submit" name="done" onclick="submitForm()">
</form>

</div>
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
  $location      =  $_POST['location'];
  $carSelect     =  $_POST['carSelect'];
  $pickupDate    =  $_POST['pickupDate'];
  $pickupTime    =  $_POST['pickupTime'];

if(isset($_POST['done']))
{
    $carSelect=      $_POST['carSelect'];
    $pickupDate=   $_POST['pickupDate'];

   $query = "SELECT * FROM bokking_deatils WHERE selectcar='$carSelect' && date='$pickupDate' ";
   $data=  mysqli_query($conn,$query);

  $total=  mysqli_num_rows($data);

    if($total == 1)
    {
        echo "<script>alert(' Sorry ... Car Is Not Available');</script>";
        
    }
    else
    {
        echo "<script>alert('Bocking Succesfully');</script>";
        $query = "INSERT INTO bokking_deatils values('$name','$email','$phone','$location','$carSelect','$pickupDate','$pickupTime')";
        $data =mysqli_query($conn,$query);
       
    }
}


 

 

}

?>