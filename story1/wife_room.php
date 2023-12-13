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
    <link rel="stylesheet" href="style02.css">
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

    <div class="wife_room">

        <div class="closet">
            <img src="wife/closet2.png" alt="closet">
        </div>

        <div class="bed">
            <img src="wife/bed2.png" alt="bed">
        </div>

        <div class="wardrobe">
            <img src="wife/wardrobe2.png" alt="wardrobe">
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

          <div class="letter1">
            <img src="wife/drawer with letter.png" alt="letter1">
          </div>

          <div class="letter2">
            <img src="wife/L letter.png" alt="letter02">
          </div>
        

        <div class="open-closet">
            <img src="owner/closet12.png" alt="closet opened">
          </div>

        <div class="dialogue-box">

            <div class="text">

                <p>This the room of the Mr.Wayen wife. She was present in the house last night when the murder happend. So she is a
                    major suspect. Now you can search in room for more clue in order to know who is the killer....<br>
                </p>
            </div>
            <button class="next">Next</button>
        </div>


        <button class="to-living-room">go back</button>
    </div>




    <script src="script02.js"></script>
</body>

</html>