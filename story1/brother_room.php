<?php
session_start();

include("../connect.php");
include("../function.php");

$user_data = check_login($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style03.css">
    <link href='https://fonts.googleapis.com/css?family=Advent Pro' rel='stylesheet'>
    <title>Document</title>
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

    <div class="brother_room">

        <div class="closet">
            <img src="brother/Untitled2.png" alt="closet">
        </div>

        <div class="wardrobe">
            <img src="brother/w3.png" alt="wardrobe">
        </div>


        <div class="open-closet">
            <img src="owner/closet12.png" alt="closet opened">
          </div>

          <div class="wardrobe-select">
            <img src="img/drawers4.png" alt="wardrobe select">
          </div>
    
    
          <div class="drawer-select">
            <img src="owner/DRAWER1.png" alt="drawer select">
          </div>
    
          <div class="drawer2-select">
            <img src="owner/DRAWER1.png" alt="drawer2 select">
          </div>

          <div class="money">
            <img src="brother/drawer with money.png" alt="money">
          </div>




        <div class="dialogue-box">

            <div class="text">

                <p>This the room of the Mr.Wayen&#39;s brother. he was not present in the house last night when the murder happend. According to him, he was in a party last night. Now you can search in room for more clue in order to know who is the killer....<br>
                </p>
            </div>
            <button class="next">Next</button>
        </div>


        <button class="to-living-room">go back</button>


    </div>
    



    <script src="script03.js"></script>
</body>
</html>