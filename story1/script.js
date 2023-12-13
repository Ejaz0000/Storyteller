let next_button = document.querySelector(".next");
let textHtml = document.querySelector(".text");
let dialogue = document.querySelector(".dialogue-box");
let closet1 = document.querySelector(".closet1");
let wardrobe1 = document.querySelector(".wardrobe1");
let opened_closet = document.querySelector(".open-closet");
let select_wardrobe = document.querySelector(".wardrobe-select");
let drawer1 = document.querySelector(".drawer-select");
let drawer2 = document.querySelector(".drawer2-select");
let gun = document.querySelector(".gun");
let safe = document.querySelector(".safe-select");
let opened_safe = document.querySelector(".open-safe");
let knife_hidden = document.querySelector(".hidden_knife");
let knife = document.querySelector(".the_knife");
let go_back =  document.querySelector(".to-living-room");

let change = 'text';
let i = 1;

let n=0;

next_button.addEventListener("click", function(){

    

    if(change == 'text'){
        if(gun.style.display == "block"){
            if(i==1){
                textHtml.innerHTML='<p>The victim also seems to be stabed. So this gun must be for Mr,Wayen&#39;s personal use...<br></p>';
                next_button.innerHTML='Back';
                change = 'scene';
                
            }
           

        }
        else{
        textHtml.innerHTML='<p>You are in the room. Now look for clues so that you can start interrogate the suspects...<br></p>';
        change = 'scene';
        }
        
    }
    else {

        if(gun.style.display == "block"){
            gun.style.display = "none"; 
            textHtml.innerHTML='<p>Check the drawers...<br></p>';

        }

        else if(opened_safe.style.display == "block"){
            opened_safe.style.display = "none"; 
            textHtml.innerHTML='<p>Check the drawers...<br></p>';

        }

        else if(knife.style.display == "block"){
            knife.style.display = "none"; 
            textHtml.innerHTML='<p>Check the drawers...<br></p>';

        }
        else{
       
        dialogue.style.display = "none";

        go_back.style.display = "block" ;
        closet1.style.display = "block" ;
        wardrobe1.style.display = "block";
        opened_closet.style.display = "none";
        select_wardrobe.style.display = "none";
        drawer1.style.display = "none";
        drawer2.style.display = "none";
        next_button.innerHTML='Next';
        gun.style.display = "none";
        safe.style.display = "none";
        knife_hidden.style.display = "none";
        knife.style.display = "none";
        }
    }

});

closet1.addEventListener("click",function(){
    opened_closet.style.display = "block";
    go_back.style.display = "none" ;
    next_button.innerHTML='Back';
    dialogue.style.display = "block";
    closet1.style.display = "none" ;
    wardrobe1.style.display = "none";
    dialogue.style.top =  "64%" ;
    textHtml.innerHTML='<p>The closet is just full of cloths. Nothing important is here...<br></p>';
    change = 'scene';
})

wardrobe1.addEventListener("click",function(){
    select_wardrobe.style.display = "block";
    go_back.style.display = "none" ;
    safe.style.display = "block";
    next_button.innerHTML='Back';
    drawer1.style.display = "block";
    drawer2.style.display = "block";
    knife_hidden.style.display = "block";
    dialogue.style.display = "block";
    closet1.style.display = "none" ;
    wardrobe1.style.display = "none";
    dialogue.style.top =  "64%" ;
    textHtml.innerHTML='<p>Check the drawers...<br></p>';
    change = 'scene';
})

drawer1.addEventListener("click",function(){
   
    textHtml.innerHTML='<p>Noting important is here...<br></p>';
    change = 'scene';
})

drawer2.addEventListener("click",function(){

    gun.style.display = "block";
    textHtml.innerHTML='<p>There is a gun in the drawer!!! But According to the statements, there was no gunshot sound last night...<br></p>';
    next_button.innerHTML='Next';
    change = 'text';
    i = 1;
})

safe.addEventListener("click",function(){

    opened_safe.style.display = "block";
    textHtml.innerHTML='<p>The safe is empty. Seems like the money has been stolen. It can be related to the murder... <br></p>';
    next_button.innerHTML='Back';
    change = 'scene';
    
})

knife_hidden.addEventListener("click",function(){

    knife.style.display = "block";
    textHtml.innerHTML='<p>There is some blood on the knife.Seems it is the weapon that was used to kill... <br></p>';
    next_button.innerHTML='Back';
    change = 'scene';
    
})

go_back.addEventListener("click",function(){

    window.location.href = "living_room.php";
    
})