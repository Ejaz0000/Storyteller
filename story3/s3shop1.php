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
    <link rel="stylesheet" href="shop1.css">
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

            <div class="sec">shop1</div>

            <button class="goback">goback</button>

            <div class="money">Money : <?php echo $up['money']; ?></div>
            <div class="time">Time : <?php echo $up['time']; ?></div>


            <div class="item01"><img src="items/b1.png" alt=""> <span class="tick1"><img src="tick.png" alt=""></span> </div>
            <div class="item02"><img src="items/p1.png" alt=""> <span class="tick2"><img src="tick.png" alt=""></span> </div>
            <div class="item03"><img src="items/w1.png" alt=""> <span class="tick3"><img src="tick.png" alt=""></span> </div>




            <div class="items">
                <div class="item1"><img src="items/sh1.png" alt="">
                    <div class="tag"><img src="Tags/300.png" alt=""><span>Shoes</span></div>
                </div>
                <div class="item2"><img src="items/b3.png" alt="">
                    <div class="tag"><img src="Tags/390.png" alt=""><span>Bag</span></div>
                </div>
                <div class="item3"><img src="items/p2.png" alt="">
                    <div class="tag"><img src="Tags/300.png" alt=""><span>Pant</span></div>
                </div>
                <div class="item4"><img src="items/w1.png" alt="">
                    <div class="tag"><img src="Tags/600.png" alt=""><span>Watch</span></div>
                </div>




            </div>

            <div class="show">
                <div class="show1"><img src="items/sh1.png" alt=""></div>
                <div class="show2"><img src="items/b3.png" alt=""></div>
                <div class="show3"><img src="items/p2.png" alt=""></div>
                <div class="show4"><img src="items/w1.png" alt=""></div>
            </div>

            <div class="dialogue">
                <div class="front-layer">
                    <div class="text">

                        <p>Choose the items and buy them by clicking on them..<br><br><br>
                        </p>
                    </div>
                    <button class="buy">Buy</button>

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


    <script type="text/javascript">
        $(document).ready(function() {

            var user = '<?php echo $user_name; ?>';


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


            let change = "scene";


            $(".dialogue .next").on("click", function(e) {


                e.preventDefault();

                if ($(".dialogue .next").html() == 'Next') {

                    if (change == "text") {

                        $(".dialogue .text").html("<p>Roaming from one shop to anothere in a section will cost 5 minutes of your time. Going to a closed shop will also take 5 minutes of your time. So be aware of the time...</p>");
                        change = "scene";
                    } else {
                        $(".dialogue").hide();
                    }

                } else {
                    $(".dialogue").hide();
                    $(".show1").hide();
                    $(".show2").hide();
                    $(".show3").hide();
                    $(".show4").hide();
                }



            });

            $(".item1").on("click", function(e) {

                e.preventDefault();
                $(".show1").show();
                $(".dialogue").css({
                    "top": "45%"
                });

                $(".dialogue").show();
                $(".dialogue .buy").show();
                $(".dialogue .text").html("<p>Are you sure you want to buy this item ?<br><br></p>");
                $(".dialogue .next").html("Back");

            });

            $(".item2").on("click", function(e) {

                e.preventDefault();
                $(".show2").show();
                $(".dialogue").css({
                    "top": "45%"
                });

                $(".dialogue").show();
                $(".dialogue .buy").show();
                $(".dialogue .text").html("<p>Are you sure you want to buy this item ?<br><br></p>");
                $(".dialogue .next").html("Back");

            });

            $(".item3").on("click", function(e) {

                e.preventDefault();
                $(".show3").show();
                $(".dialogue").css({
                    "top": "45%"
                });

                $(".dialogue").show();
                $(".dialogue .buy").show();
                $(".dialogue .text").html("<p>Are you sure you want to buy this item ?<br><br></p>");
                $(".dialogue .next").html("Back");

            });

            $(".item4").on("click", function(e) {

                e.preventDefault();
                $(".show4").show();
                $(".dialogue").css({
                    "top": "45%"
                });

                $(".dialogue").show();
                $(".dialogue .buy").show();
                $(".dialogue .text").html("<p>Are you sure you want to buy this item ?<br><br></p>");
                $(".dialogue .next").html("Back");

            });

            $(".goback").on("click", function(e) {

                e.preventDefault();


                var time = 5;

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
                            location.href = 'sec3.php';
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



            $(".dialogue .buy").on("click", function(e) {


                e.preventDefault();

                if ($(".show1").is(":visible")) {


                    $(".dialogue").hide();
                    $(".show1").hide();

                    var item = "shoes";
                    var price = 300;
                    var user_name = '<?php echo $user_name; ?>';



                    $.ajax({

                        url: "buy.php",
                        type: "POST",
                        data: {
                            items: item,
                            prices: price,
                            name: user_name
                        },
                        success: function(data) {
                            if (data == 'over') {
                                $(".over").show();
                            }
                            if (data == 'empty') {
                                $(".over").show();
                                $(".over .text").html("<p>You do not have any money or time left...<br><br></p>");
                                $(".over .score").hide();

                            }

                            $(".money").html("Money : " + data);
                           



                        }
                    });

                }

                if ($(".show2").is(":visible")) {


                    $(".dialogue").hide();
                    $(".show2").hide();

                    var item = "bag";
                    var price = 390;
                    var user_name = '<?php echo $user_name; ?>';



                    $.ajax({

                        url: "buy.php",
                        type: "POST",
                        data: {
                            items: item,
                            prices: price,
                            name: user_name
                        },
                        success: function(data) {
                            if (data == 'over') {
                                $(".over").show();
                            }
                            if (data == 'empty') {
                                $(".over").show();
                                $(".over .text").html("<p>You do not have any money or time left...<br><br></p>");
                                $(".over .score").hide();

                            }

                            $(".money").html("Money : " + data);
                            $(".tick1").show();



                        }
                    });

                }


                if ($(".show3").is(":visible")) {


                    $(".dialogue").hide();
                    $(".show3").hide();

                    var item = "pant";
                    var price = 300;
                    var user_name = '<?php echo $user_name; ?>';



                    $.ajax({

                        url: "buy.php",
                        type: "POST",
                        data: {
                            items: item,
                            prices: price,
                            name: user_name
                        },
                        success: function(data) {
                            if (data == 'over') {
                                $(".over").show();
                            }
                            if (data == 'empty') {
                                $(".over").show();
                                $(".over .text").html("<p>You do not have any money or time left...<br><br></p>");
                                $(".over .score").hide();

                            }

                            $(".money").html("Money : " + data);
                            $(".tick2").show();



                        }
                    });

                }

                if ($(".show4").is(":visible")) {


                    $(".dialogue").hide();
                    $(".show4").hide();

                    var item = "watch";
                    var price = 600;
                    var user_name = '<?php echo $user_name; ?>';



                    $.ajax({

                        url: "buy.php",
                        type: "POST",
                        data: {
                            items: item,
                            prices: price,
                            name: user_name
                        },
                        success: function(data) {
                            if (data == 'over') {
                                $(".over").show();
                            }
                            if (data == 'empty') {
                                $(".over").show();
                                $(".over .text").html("<p>You do not have any money or time left...<br><br></p>");
                                $(".over .score").hide();

                            }

                            $(".money").html("Money : " + data);
                            $(".tick3").show();



                        }
                    });

                }


            });



        });
    </script>

</body>

</html>