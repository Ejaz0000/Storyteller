<?php



session_start();

include("../connect.php");
include("../function.php");

$user_data = check_login($con);

$user_name = $user_data['user_name'];

$query = "insert into story_3 (user_name) values ('$user_name')";

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
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>


    <title>Document</title>
</head>

<body>
    <div class="nav-bar">
        <ul>
        <li><a href="../Homepage/homepage.php">Quit</a></li>
            <li><a href="#option">Option</a></li>
            <li><a href="#home">Home</a></li>
            <li class="game-name">Tap SuperMarket</li>
        </ul>
    </div>

    <div class="main">

        <div class="mall">


            <div class="map">
                <h1>MAP</h1>
                
                <div class="sections">
                    <div class="s1">section1</div>
                    <div class="s2">section2</div>
                    <div class="s3">section3</div>
                    <div class="s4">section4</div>
                </div>


            </div>
            <div class="dialogue">
                <div class="front-layer">
                    <div class="text">
                        <h1>WELCOME!</h1>
                        <p>You have came to mall where you have to buy 3 items a bag, a pant and a watch. Your budget is 1500tk. You have came to the mall at almost closing time so you have 90 minutes left to buy all those stuffs <br> So lets Start...<br>
                        </p>
                    </div>
                    <button class="next">Next</button>
                </div>
                <div class="back-layer"></div>
            </div>


        </div>



    </div>




    <script type="text/javascript">
        $(document).ready(function() {


            let change = "text";


            $(".dialogue .next").on("click", function(e) {



                e.preventDefault();

                if (change == "text") {
                    $(".map").show();
                    $(".dialogue").css({
                        "top": "45%"
                    });
                    $(".dialogue .text").html("<p>This the map of the mall.There are 4 Sections. You can roam around from one section to another. However,Going one section to the another closet section will take 15 minutes so farest one will take 45 min. So take your steps with caution. </p>");
                    change = "scene";
                } else {
                    $(".dialogue").hide();
                }




            });

            $(".s1").on("click", function(e) {



                e.preventDefault();
                location.href = 'sec1.php';




            });




            $(".s2").on("click", function(e) {



                e.preventDefault();
                location.href = 'sec2.php';




            });


            $(".s3").on("click", function(e) {



                e.preventDefault();
                location.href = 'sec3.php';




            });

            $(".s4").on("click", function(e) {



                e.preventDefault();
                location.href = 'sec4.php';




            });



        });
    </script>
</body>

</html>