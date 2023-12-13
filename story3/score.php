<?php

session_start();

include("../connect.php");
include("../function.php");

$user_name = $_POST['name'];


$update = "select * from story_3 where user_name = '$user_name' limit 1";
$re = mysqli_query($con, $update);
$up = mysqli_fetch_assoc($re);

$item1 =  $up['item1'];
$item2 = $up['item2'];
$item3 = $up['item2'];
$money = $up['money'];
$time = $up['time'];



$query = "insert into score (user_name,money,time) values ('$user_name','$money','$time')";

mysqli_query($con, $query);

die;

?>