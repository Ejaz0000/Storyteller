<?php

session_start();

include("../connect.php");
include("../function.php");

$user_name = $_POST['name'];
$item = $_POST['items'];
$price = $_POST['prices'];


 if($item == 'bag'){
    $upd = "update story_3 set item1 = 'yes' where user_name = '$user_name'";
    mysqli_query($con, $upd);


 }

 if($item == 'pant'){
  $upd = "update story_3 set item2 = 'yes' where user_name = '$user_name'";
  mysqli_query($con, $upd);


}

if($item == 'watch'){
  $upd = "update story_3 set item3 = 'yes' where user_name = '$user_name'";
  mysqli_query($con, $upd);


}

   $u = "update story_3 set money = money - '$price' where user_name = '$user_name'";
    mysqli_query($con, $u);

 $update = "select * from story_3 where user_name = '$user_name' limit 1";
 $re = mysqli_query($con, $update);
 $up = mysqli_fetch_assoc($re);

 $item1 =  $up['item1'];
$item2 = $up['item2'];
$item3 = $up['item2'];
$money = $up['money'];
$time = $up['time'];

 if($money <= 0 || $time <= 0){
   echo "empty";
   die;
 }

 if($item1 == 'yes' && $item2 == 'yes' && $item3 == 'yes'){
   echo "over";
   die;
 }

 

 echo $money;



?>