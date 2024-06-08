<?php
error_reporting(0);
   $servername  ="localhost";
   $username    ="root";
   $password    ="";
   $dbname      ="carbook";


   $conn  = mysqli_connect($servername, $username , $password , $dbname );

   if( $conn)
   {
 // echo " connection ok";
   }
   else{
    echo "connection not ok".mysqli_connect_error();
   }

   ?>






<html lang="en">
<head>
  
    <title></title>
    <style>
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 300px;
    margin: 100px auto;
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
    text-align: center;
    margin-bottom: 20px;
}

.form-control {
    margin-bottom: 20px;
}

.form-control label {
    display: block;
    margin-bottom: 5px;
}

.form-control input {
    width: 100%;
    padding: 10px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    border: none;
    cursor: pointer;
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;

}

input[type="submit"]:hover {
    background-color: #45a049;
}

        </style>
</head>
<body>
    <div class="container">
        <form id="loginForm" method="POST" >
            <h2>Sign In</h2>
            <div class="form-control">
               
                <input type="email" id="email" placeholder="Email" name="email" required>
            </div>
            <div class="form-control">
                
                <input type="password" id="password"  placeholder="Password" name="password" required>
            </div>
           <input type="submit" value="Submit" name="done">
           <center><h3>New User?<a href="http://localhost/final/signup.php">Sign Up</a></h3></center>
</form>  
    </div>
   
</body>
</html>



<?php
if($_POST['done'])
{
  
  $email         =  $_POST['email'];
  $password       =  $_POST['password'];
  
  
  
  if(isset($_POST['done']))
{
    $email=      $_POST['email'];
    $password=   $_POST['password'];

   $query = "SELECT * FROM signup WHERE email='$email' && password='$password' ";
   $data=  mysqli_query($conn,$query);

  $total=  mysqli_num_rows($data);

    if($total == 1)
    {
       header('location:first.php');
       $query = "INSERT INTO signin values('$email','$password')";
       $data =mysqli_query($conn,$query);
    }
   
    else
    {
        echo "<script>alert('Invalid email or password');</script>";
       
    }
}

  else{
    echo "no insert data";
  }
  }




?>

