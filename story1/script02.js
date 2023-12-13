let next_button = document.querySelector(".next");
let textHtml = document.querySelector(".text");
let dialogue = document.querySelector(".dialogue-box");
let go_back =  document.querySelector(".to-living-room");
let wardrobe = document.querySelector(".wardrobe");
let closet = document.querySelector(".closet");
let opened_closet = document.querySelector(".open-closet");
let bed = document.querySelector(".bed");
let letter1 = document.querySelector(".letter1");
let select_wardrobe = document.querySelector(".wardrobe-select");
let drawer1 = document.querySelector(".drawer-select");
let drawer2 = document.querySelector(".drawer2-select");
let letter2 = document.querySelector(".letter2");





let change = 'scene';
let i=0;


next_button.addEventListener("click", function(){

    
   
    if(change == 'text'){
        
        if(letter2.style.display == "block"){

            
            if(i==1){
                textHtml.innerHTML='<p>From the context of the letter, It seems Mrs.Wayen was planning to do something and if the everting goes as plan she will get the whole property of Mr.Wayen...<br><br>Well, It is a major clue for the case!</p>';
                next_button.innerHTML='Back';
                change = 'scene';
                
            }
           

       
         } 
        else{
        textHtml.innerHTML='<p>...<br></p>';
        change = 'scene';
        }
        
    }
    
    else {

        if(letter1.style.display == "block"){
            letter1.style.display = "none"; 
            textHtml.innerHTML='<p>Check the drawers...<br></p>';

        }
    else{
        letter2.style.display = "none";
        bed.style.display = "block" ;
        go_back.style.display = "block" ;
        dialogue.style.display = "none";
        closet.style.display = "block" ;
        wardrobe.style.display = "block" ;
        opened_closet.style.display = "none";
        letter1.style.display = "none";
        select_wardrobe.style.display = "none";
        next_button.innerHTML='Next';
        drawer1.style.display = "none";
        drawer2.style.display = "none";
        }
        
    }
 

});

closet.addEventListener("click",function(){
    opened_closet.style.display = "block";
    go_back.style.display = "none" ;
    next_button.innerHTML='Back';
    dialogue.style.display = "block";
    closet.style.display = "none" ;
    wardrobe.style.display = "none";
    dialogue.style.top =  "64%" ;
    textHtml.innerHTML='<p>The closet is just full of cloths. Nothing important is here...<br></p>';
    change = 'scene';
})

wardrobe.addEventListener("click",function(){
    select_wardrobe.style.display = "block";
    next_button.innerHTML='Back';
    drawer1.style.display = "block";
    drawer2.style.display = "block";
    dialogue.style.display = "block";
    wardrobe.style.display = "none";
    go_back.style.display = "none" ;
    dialogue.style.top =  "64%" ;
    textHtml.innerHTML='<p>Check the drawers...<br></p>';
    change = 'scene';
})  

drawer1.addEventListener("click",function(){
   
    textHtml.innerHTML='<p>Noting important is here...<br></p>';
    change = 'scene';
})

drawer2.addEventListener("click",function(){

    letter1.style.display = "block";
    textHtml.innerHTML='<p>This seems like a divorce letter with Mr. and Mrs.Wayen&#39;s name on it. Was Mrs.Wayen trying to divorce Mr.Wayen?<br></p>';
    next_button.innerHTML='Back';
    change = 'scene';

    
})

bed.addEventListener("click",function(){
    letter2.style.display = "block";
    next_button.innerHTML='Next';
    dialogue.style.display = "block";
    wardrobe.style.display = "none";
    closet.style.display = "none";
    bed.style.display = "none";
    go_back.style.display = "none" ;
    dialogue.style.top =  "64%" ;
    textHtml.innerHTML='<p>This is a love letter!! Written for Mrs. Wayen. It seems she was having an afair with another man. That is why she was trying to divorce Mr.Wayen. Mr.Wayen&#39;s brother said that Mr. and Mrs.Wayen was fighting about something. then this must be the reason. <br></p>';
    change = 'text';
    i=1;
})  

go_back.addEventListener("click",function(){

    window.location.href = "living_room.php";
    
})