<?php



session_start();

include("../connect.php");
include("../function.php");

$user_data = check_login($con);

$user_name = $user_data['user_name'];

$query = "select * from score order by money desc";
$result = mysqli_query($con, $query);
$scores = mysqli_fetch_all($result,MYSQLI_ASSOC);



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="score.css">
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

            <div class="sec">Score Board</div>

            <div class="calendar_div">

           <div class="title">Scores</div>

            <table id="calendar_table">
            <tr>
              <th> Name</th>
              <th> Money</th>
              <th> Time</th>
              
            </tr>
            <?php foreach($scores as $score){ ?>
            <tr>
              <td><?php echo $score['user_name'];?></td>
              <td><?php echo $score['money'];?></td>
              <td><?php echo $score['time'];?></td>
            </tr>
            <?php } ?>  
            
            
        </table>

        </div> 
        </div>
        

        


    </div>


</body>

</html>