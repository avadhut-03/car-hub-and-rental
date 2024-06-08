<?php
error_reporting(0);
   $servername  ="localhost";
   $username    ="root";
   $password    ="";
   $dbname      ="ragister";


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
    <title>Registration Form</title>
 <style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.container {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    width:40%;
}

.form-group {
    margin-bottom: 20px;
}

label {
    display: block;
    margin-bottom: 5px;
}

input[type="text"],
input[type="email"],
input[type="password"] {
    width: 100%;
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
    box-sizing: border-box;
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
        <h2>Registration Form</h2>
        <form id="registrationForm" action="" method="POST">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <input type="submit" value="Ragistation" name="done" onclick="submitForm()">
        </form>
    </div>

    <script >
             function submitForm() {
 
             var name = document.getElementById("name").value;
             var email = document.getElementById("email").value;
             var password = document.getElementById("password").value;

            if (  name === "" ||email === "" || password === "" ) {
              alert("Please fill out all fields.");
              return;
             }

            var message = "Thank you for login! Details:\n";

                message += "name: " + name + "\n";
                message += "Email: " + email + "\n";
                message += "Phone: " + password + "\n";
 

 alert(message);


}
    </script>
</body>
</html>


<?php

if($_POST['done'])
{
  $name         =  $_POST['name'];
  $email         =  $_POST['email'];
  $password       =  $_POST['password'];
  
  $query = "INSERT INTO ragister_data values('$Name',$Email','$Password')";
  $data =mysqli_query($conn,$query);

  if($data)
  {
    echo "data insert";
  }

  else{
    echo "no insert data";
  }
  }




?>