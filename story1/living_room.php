<?php
session_start();

include("../connect.php");
include("../function.php");

$user_data = check_login($con);
$user_name = &$user_data['user_name'];


$que= "select * from story_1 where user_name = '$user_name' ";
$res = mysqli_query($con, $que);
$player_data = mysqli_fetch_assoc($res);
$player_life = $player_data['life'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style01.css">
    <link href='https://fonts.googleapis.com/css?family=Advent Pro' rel='stylesheet'>
    <title>Living room</title>
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

    <div class="living_room">

        <div class="butler">
            <img src="living_room/butler2.png" alt="butler">
        </div>

        <div class="wife">
            <img src="living_room/lady.png" alt="wife">
        </div>

        <div class="brother">
            <img src="living_room/brother.png" alt="brother">
        </div>
        
        <div class="arrested">
            <img src="living_room/arrsted.jpg" alt="arrested">
        </div>

        <div class="dialogue-box">
            
            <div class="text">
            
                    <p>These are the three people living with Mr.wayne his wife, his brother and his butler. Now you can investigate them in order to arrest the real murderer...<br>
                   </p>
           </div>
           <div class="buttons">
            <button class="back">Back</button>
           <button class="arrest">Arrest</button>
           <button class="next">Next</button>
           </div>
         </div>

    </div>


    <script >
        let next_button = document.querySelector(".next");
let arrest_button = document.querySelector(".arrest");
let back_button = document.querySelector(".back");
let textHtml = document.querySelector(".text");
let dialogue = document.querySelector(".dialogue-box");
let butler = document.querySelector(".butler");
let wife = document.querySelector(".wife");
let brother = document.querySelector(".brother");
let arrested = document.querySelector(".arrested");



let change = 'text';
let person =0;
let life = 2;
let delayInMilliseconds=1000;

next_button.addEventListener("click", function(){

    
    if( next_button.innerHTML == 'Next'){
    if(change == 'text'){
        
        textHtml.innerHTML='<p>Now choose one of the person you want to interrogate...<br></p>';
        change = 'scene';
        
        
    }
    
    else {

        dialogue.style.display = "none";
    }
 }

 else if(next_button.innerHTML=='Check'){
    if(person==1){
    window.location.href = "butler_room.html";
    }

    else if(person==2){
        window.location.href = "wife_room.html";
        }

    else if(person==3){
    window.location.href = "brother_room.html";
    }

 }

});

butler.addEventListener("click", function(){
    person=1;
    dialogue.style.display = "block";
    textHtml.innerHTML='<p>This the butler of the house. You can check his room for more clues to make sure he is the murderer or you can arrest him now...<br></p>';
    arrest_button.style.display = "block";
    back_button.style.display = "block";
    next_button.innerHTML='Check';
   

});

wife.addEventListener("click", function(){
    person =2;

    dialogue.style.display = "block";

    
    textHtml.innerHTML='<p>This the wife of Mr.wayen. You can check her room for more clues to make sure she is the murderer or you can arrest her now...<br></p>';
    arrest_button.style.display = "block";
    back_button.style.display = "block";
    next_button.innerHTML='Check';
});

brother.addEventListener("click", function(){

    person=3;
    dialogue.style.display = "block";
   
    textHtml.innerHTML='<p>This the brother of Mr.wayen. You can check his room for more clues to make sure he is the murderer or you can arrest him now...<br></p>';
    arrest_button.style.display = "block";
    back_button.style.display = "block";
    next_button.innerHTML='Check';
});

arrest_button.addEventListener("click", function(){

    
    if(person==1){
        person =1.1;
        dialogue.style.top =  "30%" ;
        textHtml.innerHTML='<p>Are you sure you want to arrest him?<br><br>Arresting the wrong person will deduct your life..</p>';
        

    }
    else if(person==2){
        person = 2.1;
        dialogue.style.top =  "30%" ;
        textHtml.innerHTML='<p>Are you sure you want to arrest her?<br><br>Arresting the wrong person will deduct your life..</p>';
        
    }

    else if(person==3){
        person = 3.1;
        dialogue.style.top =  "30%" ;
        textHtml.innerHTML='<p>Are you sure you want to arrest him?<br><br>Arresting the wrong person will deduct your life..</p>';
        
    }

    else if(person==1.1){
        dialogue.style.display = "none";
        life--;

        arrested.style.display= "block";
        setTimeout(function(){

         dialogue.style.display = "block";
        arrest_button.style.display= "none";
        next_button.style.display= "none";
        if(life == 0){
            textHtml.innerHTML='<p>You have arrested the worng person again. <br><br> You have Lost the game!</p>';
            back_button.style.display= "none";
        }
        else{
            textHtml.innerHTML='<p>You have arrested the worng person. <br><br> Now you have lost a life...</p>';
        }

        },delayInMilliseconds);
        
        
    }

    else if(person==2.1){
        dialogue.style.display = "none";
        arrested.style.display= "block";

        setTimeout(function(){

        dialogue.style.display = "block";
        textHtml.innerHTML='<p>You have arrested the Right person. <br><br> You have Won the game!</p>';
        arrest_button.style.display= "none";
        next_button.style.display= "none";
        back_button.style.display= "none";

         },delayInMilliseconds);
    }

    else if(person==3.1){
        dialogue.style.display = "none";
        life--;
        arrested.style.display= "block";
        setTimeout(function(){

         dialogue.style.display = "block";
        arrest_button.style.display= "none";
        next_button.style.display= "none";
        if(life == 0){
            textHtml.innerHTML='<p>You have arrested the worng person again. <br><br> You have Lost the game!</p>';
            back_button.style.display= "none";
        }
        else{
            textHtml.innerHTML='<p>You have arrested the worng person. <br><br> Now you have lost a life...</p>';
        }

        },delayInMilliseconds);
        
        
    }


});

back_button.addEventListener("click",function(){

    dialogue.style.display = "none";
    arrested.style.display= "none";

});
    </script>

</body>

</html>