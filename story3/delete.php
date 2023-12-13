<?php

session_start();

include("../connect.php");
include("../function.php");

$user_name = $_POST['name'];



$del = "delete from story_3 where user_name = '$user_name'";
mysqli_query($con, $del);

die;

?>