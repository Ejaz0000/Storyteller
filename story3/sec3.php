<?php



session_start();

include("../connect.php");
include("../function.php");

$user_data = check_login($con);

$user_name = $user_data['user_name'];

$update = "select * from story_3 where user_name = '$user_name' limit 1";
$re = mysqli_query($con, $update);
$up = mysqli_fetch_assoc($re);



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sec1.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css?family=Advent Pro' rel='stylesheet'>

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

            <div class="sec">Section-03</div>

            <button class="map-open">Open map</button>

            <div class="money">Money : <?php echo $up['money']; ?></div>
            <div class="time">Time : <?php echo $up['time']; ?></div>

            <div class="item01"><img src="items/b1.png" alt=""> <span class="tick1"><img src="tick.png" alt=""></span> </div>
            <div class="item02"><img src="items/p1.png" alt=""> <span class="tick2"><img src="tick.png" alt=""></span> </div>
            <div class="item03"><img src="items/w1.png" alt=""> <span class="tick3"><img src="tick.png" alt=""></span> </div>

            <div class="shops">
                <div class="shop1"><img src="Shops/s1.png" alt="shop1"></div>
                <div class="shop2"><img src="Shops/s2.png" alt="shop2"></div>
                <div class="shop3"><img src="Shops/s3.png" alt="shop3"></div>

            </div>

            <div class="map">
                <h1>MAP</h1>
                <button class="map-back">Close</button>

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

                        <p>There are 3 shops in this section. You can search for items in these shops. But some of the items may not be available in some shops also some of the shops may also be closed which can waste your time...<br>
                        </p>
                    </div>
                    <button class="next">Next</button>
                </div>
                <div class="back-layer"></div>
            </div>

            <div class="over">
                <div class="front-layer">
                    <div class="text">

                        <p>You have completed the game...<br><br><br>
                        </p>
                    </div>
                    <button class="score">Score</button>

                    <button class="quit">Quit</button>
                </div>
                <div class="back-layer"></div>
            </div>
        </div>
    </div>


    </div>

    <script type="text/javascript">
        var user = '<?php echo $user_name; ?>';


        $(document).ready(function() {

            var item1 = '<?php echo $up['item1']; ?>';
            var item2 = '<?php echo $up['item2']; ?>';
            var item3 = '<?php echo $up['item3']; ?>';



            if (item1 == 'yes') {
                $(".tick1").show();
            }

            if (item2 == 'yes') {
                $(".tick2").show();
            }

            if (item3 == 'yes') {
                $(".tick3").show();
            }


            let change = "text";




            $(".dialogue .next").on("click", function(e) {


                e.preventDefault();

                if (change == "text") {

                    $(".dialogue .text").html("<p>Roaming around in a shop in a section will cost 5 minutes of your time. Going to a closed shop will also take 5 minutes of your time. So be aware of the time...</p>");
                    change = "scene";
                } else {
                    $(".dialogue").hide();
                }



            });


            $(".shop1").on("click", function(e) {

                e.preventDefault();
                location.href = 's3shop1.php';




            });

            $(".shop2").on("click", function(e) {

                e.preventDefault();
                location.href = 's3shop2.php';




            });

            $(".shop3").on("click", function(e) {

                e.preventDefault();
                location.href = 's3shop3.php';




            });

            $(".map-open").on("click", function(e) {

                e.preventDefault();
                $(".map").show();




            });

            $(".map-back").on("click", function(e) {

                e.preventDefault();
                $(".map").hide();




            });


            $(".s1").on("click", function(e) {



                e.preventDefault();

                var time = 30;

                $.ajax({

                    url: "time.php",
                    type: "POST",
                    data: {
                        times: time,
                        name: user
                    },
                    success: function(data) {
                        if (data == 'empty') {
                            $(".over").show();
                            $(".over .text").html("<p>You do not have any money or time left...<br><br></p>");
                            $(".over .score").hide();

                        } else {
                            if (data == 'empty') {
                                $(".over").show();
                                $(".over .text").html("<p>You do not have any money or time left...<br><br></p>");
                                $(".over .score").hide();

                            } else {
                                location.href = 'sec1.php';
                            }

                        }





                    }
                });




            });


            $(".s2").on("click", function(e) {



                e.preventDefault();

                var time = 15;

                $.ajax({

                    url: "time.php",
                    type: "POST",
                    data: {
                        times: time,
                        name: user
                    },
                    success: function(data) {
                        if (data == 'empty') {
                            $(".over").show();
                            $(".over .text").html("<p>You do not have any money or time left...<br><br></p>");
                            $(".over .score").hide();

                        } else {
                            if (data == 'empty') {
                                $(".over").show();
                                $(".over .text").html("<p>You do not have any money or time left...<br><br></p>");
                                $(".over .score").hide();

                            } else {
                                location.href = 'sec2.php';
                            }

                        }





                    }
                });





            });

            $(".s4").on("click", function(e) {



                e.preventDefault();

                var time = 15;

                $.ajax({

                    url: "time.php",
                    type: "POST",
                    data: {
                        times: time,
                        name: user
                    },
                    success: function(data) {
                        if (data == 'empty') {
                            $(".over").show();
                            $(".over .text").html("<p>You do not have any money or time left...<br><br></p>");
                            $(".over .score").hide();

                        } else {
                            location.href = 'sec4.php';
                        }





                    }
                });




            });

            $(".over .quit").on("click", function(e) {

                e.preventDefault();

                $.ajax({

                    url: "delete.php",
                    type: "POST",
                    data: {
                        name: user
                    },
                    success: function(data) {

                        location.href = '../Homepage/homepage.php';

                    }
                });


            });

            $(".over .score").on("click", function(e) {

                e.preventDefault();

                $.ajax({

                    url: "score.php",
                    type: "POST",
                    data: {
                        name: user
                    },
                    success: function(data) {

                        location.href = 'scoreboard.php';

                    }
                });


            });



        });
    </script>


</body>

</html>