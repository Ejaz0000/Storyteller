<?php

session_start();

include("../connect.php");
include("../function.php");

$user_data = check_login($con);

$user_name = &$user_data['user_name'];

$query = "insert into story_1 (user_name) values ('$user_name')";

mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Advent Pro' rel='stylesheet'>
    
    
    <title>Clue</title>
</head>
<body>
    
    <div class="nav-bar">
    <ul>
    <li><a href="../Homepage/homepage.php">Quit</a></li>
        <li><a href="#option">Option</a></li>
        <li><a href="#home">Home</a></li>
        <li class="game-name">Clue</li>
      </ul>
    </div>
    <div class="owner-bedroom">

      
      <div class="open-closet">
        <img src="owner/closet12.png" alt="closet opened">
      </div>

      <div class="wardrobe-select">
        <img src="owner/drawers4.png" alt="wardrobe select">
      </div>

      <div class="safe-select">
        <img src="owner/safe2.png" alt="safe-close">
      </div>

      <div class="drawer-select">
        <img src="owner/DRAWER1.png" alt="drawer select">
      </div>

      <div class="drawer2-select">
        <img src="owner/DRAWER1.png" alt="drawer2 select">
      </div>

     

      <div class="hidden_knife">
        <img src="owner/knife2.png" alt="hidden_knife">

      </div>

      <div class="the_knife">
        <img src="owner/knife (1).png" alt="the_knife">
      </div>

      <div class="gun">
        <img src="owner/drawer with gun.png" alt="gun in drawer">
      </div>

      <div class="open-safe">
        <img src="owner/safe3.png" alt="opened safe">
      </div>
        
      <div class="dialogue-box">
            
         <div class="text">
                <h1>WELCOME!</h1>
                 <p>The richest man in town Mr. Wayne has been murdered in his room last night. You are a detective who have been hired to 
                      investigate this case and now you are in his 
                     room looking for clues...<br>
                </p>
        </div>
        <button class="next">Next</button>
      </div>
      <div class="closet1">
      <img src="owner/closet1 .png" alt="closet1">
      </div>

      <div class="wardrobe1">
        <img src="owner/wardrob1 .png" alt="wardrobe1">
        </div>

        

        <button class="to-living-room">go back</button>
        
        
        

        
    </div>

    <script src="script.js"></script>
</body>
</html>