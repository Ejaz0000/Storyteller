<?php


session_start();

	include("../connect.php");
	include("../function.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{     
        


			//read from database
			$query = "select * from user where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);

                    
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: ../Homepage/homepage.php");
						die;
					}
				}
			
			
				echo '<script>alert("wrong username or password!")</script>';
		}else
		{
			echo '<script>alert("wrong username or password!")</script>';
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
                <div class="login"><img src="login.png" alt="login"></div>
                <div class="form">
					<form action="" method = "post">
                		<input type="text" class="username" name ="user_name" placeholder="Username...">
                		<input type="password" class="password" name="password" placeholder="Password..."><br>
						<input type="submit" value="Login" style="background-color:rgb(181, 91, 163);border:none;color:white;width: 60px;margin-left:20%;" />
					</form>
                </div>
               
                <div class="signup"><a href="../signup/signup.php"><img src="signup.png" alt="signup"></a></div>
            </div>

        </div>
    </div>
</body>
</html>