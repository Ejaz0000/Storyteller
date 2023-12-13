<?php
session_start();
    include("../connect.php");
	include("../function.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
        $email = $_POST['email'];
        
        

		if(!empty($user_name) && !empty($password) && !empty($email))
		{

			//save to database
			$query = "insert into user (user_name,password,email) values ('$user_name','$password','$email')";

			mysqli_query($con, $query);

			header("Location: ../login/login.php");
			die;
		}else
		{
            echo '<script>alert("Please enter some valid information!")</script>';
		}
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Story Teller</title>
</head>
<body>
    <div class="main">

        <div class="logo">
            <img src="logo.png" alt="logo">
        </div>

        <div class="login_box">

            <div class="second_layer"></div>

            <div class="main_layer">
                <div class="sign"><img src="sign.png" alt="sign"></div>
                <div class="form">
                <form action="" method = "post">
                		<input type="text" class="username" name ="user_name" placeholder="Username...">
                        <input type="email" class="email" name ="email" placeholder="Email...">
                		<input type="password" class="password" name="password" placeholder="Password..."><br>
						<input type="submit" value="Submit" style="background-color:rgb(181, 91, 163);border:none;color:white;width: 60px;margin-left:20%;" />
					</form>
                </div>
               
            </div>

        </div>
    </div>
</body>
</html>