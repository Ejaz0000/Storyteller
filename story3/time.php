<?php

session_start();

include("../connect.php");
include("../function.php");

$user_name = $_POST['name'];
$time = $_POST['times'];






    $up = "update story_3 set time = time - '$time' where user_name = '$user_name'";
    mysqli_query($con, $up);

    $update = "select * from story_3 where user_name = '$user_name' limit 1";
    $re = mysqli_query($con, $update);
    $up = mysqli_fetch_assoc($re);

 
    $time = $up['time'];

    if($time <= 0){
        echo "empty";
        die;
      }

    else{
        echo "continue";
        die;
    }




?>