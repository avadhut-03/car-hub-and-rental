<?php
error_reporting(0);
   $servername  ="localhost";
   $username    ="root";
   $password    ="";
   $dbname      ="carbook";


   $conn  = mysqli_connect($servername, $username , $password , $dbname );

   if( $conn)
   {
 //  echo " connection ok";
   }
   else{
    echo "connection not ok".mysqli_connect_error();
   }

   ?>







<html lang="en">
<head>

<title>Signup Page</title>
<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
  }
  form {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 300px;
  }
  input[type="text"],
  input[type="email"],
  input[type="password"] {
    width:100%;
    height:7%;
    padding: 8px;
    margin: 8px 0;
    border: 1px solid #ccc;
    border-radius: 4px;
  }
  input[type="submit"] {
    width: 100%;
    background-color:  #4CAF50;
    color: #fff;
    border: none;
    padding: 10px;
    border-radius: 4px;
    cursor: pointer;
  }
  input[type="submit"]:hover {
    background-color: #0056b3;
  }
</style>
</head>
<body>
<form  method="POST" >

  <center><h2>Signup</h2><center>
  <input type="text"  placeholder="Username" name="username" required>
  <input type="email"  placeholder="Email" name="email" required>
  <input type="password"  placeholder="Password" name="password" required>
  <input type="submit" value="Sign Up" name="done">
  <center><h3>Already SignIn?<a href="http://localhost/final/signin.php">Sign in</a></h3></center>
</form>

<script>
 
</script>
</body>
</html>

<?php
if($_POST['done'])
{
  $username      =  $_POST['username'];
  $email         =  $_POST['email'];
  $password       =  $_POST['password'];
  
  $query = "INSERT INTO signup values('$username','$email','$password')";
  $data =mysqli_query($conn,$query);
  if($data)
  {
    header('location:signin.php');
  }

  else{
    echo "no insert data";
  }
  }




?>