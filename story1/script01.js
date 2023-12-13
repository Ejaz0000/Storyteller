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
let life =  2;
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
    window.location.href = "butler_room.php";
    }

    else if(person==2){
        window.location.href = "wife_room.php";
        }

    else if(person==3){
    window.location.href = "brother_room.php";
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