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
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>

    <title>Story Teller</title>
</head>

<body>
    <div class="main">

        <header>

            <div class="logo">
                <img src="logo.png" alt="logo">
            </div>

            <nav>
                <ul class="nav_links">
                    <li class="home"><img src="home.png" alt="home"></li>
                    <li class="login"><img src="login.png" alt="login"></li>
                </ul>
            </nav>

        </header>

        <div class="game_box1">

            <div class="second_layer"></div>
            <div class="main_layer">
                <div class="logo"><img src="logo2.PNG" alt="logo"></div>
                <div class="text">
                    <h3>Clue</h3>
                    <p>A murder mystery investigation game where you will search for clue and arrest the actual murderer.</p>
                </div>
                <div class="button"><a href="../story1/index.php"><img src="pplay.png" alt="play"></a></div>
            </div>

        </div>

        <div class="game_box2">

            <div class="second_layer"></div>
            <div class="main_layer">
                <div class="logo"><img src="logo3.png" alt="logo"></div>

                <div class="text">
                
                <h3>Tap Market</h3>
                <p>A shoping game where you will buy specific items in time with a given budget.</p>
                </div>

                <div class="button"><a href="../story3/starting.php"><img src="pplay.png" alt="play"></a></div>
                </div>
            </div>

        </div>

        <div class="game_box3">

            <div class="second_layer"></div>
            <div class="main_layer">
                <div class="logo"><img src="game_logo.jpg" alt="logo"></div>
                <div class="text">
                <h3>Road</h3>   
                <p>A game where you have to go from one destination from to another.</p>
                   
                </div>

                <div class="button"><a href="../story2/page1.html"><img src="pplay.png" alt="play"></a></div>

            </div>

        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {




            $(".login").on("click", function(e) {



                e.preventDefault();

                $.ajax({

                    url: "logout.php",
                    type: "POST",
                    data: {  
                    },
                    success: function(data) {
                        location.href = '../login/login.php';


                    }
                });



            });



        });
    </script>
</body>

</html>