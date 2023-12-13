let next_button = document.querySelector(".next");
let textHtml = document.querySelector(".text");
let dialogue = document.querySelector(".dialogue-box");
let go_back =  document.querySelector(".to-living-room");
let wardrobe = document.querySelector(".wardrobe");
let closet = document.querySelector(".closet");
let opened_closet = document.querySelector(".open-closet");
let select_wardrobe = document.querySelector(".wardrobe-select");
let drawer1 = document.querySelector(".drawer-select");
let drawer2 = document.querySelector(".drawer2-select");
let money = document.querySelector(".money");

let change = 'scene';
let i=0;

next_button.addEventListener("click", function(){

    
   
    if(change == 'text'){
        
        if(money.style.display == "block"){

            
            if(i==1){
                textHtml.innerHTML='<p>According to the Mr.Wayens brother statement, these money was stolen by him so he could go to the party last night..<br></p>';
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

        if(money.style.display == "block"){
            money.style.display = "none"; 
            textHtml.innerHTML='<p>Check the drawers...<br></p>';

        }

        else{
        
        go_back.style.display = "block" ;
        dialogue.style.display = "none";
        closet.style.display = "block" ;
        wardrobe.style.display = "block" ;
        opened_closet.style.display = "none";
        select_wardrobe.style.display = "none";
        next_button.innerHTML='Next';
        drawer1.style.display = "none";
        drawer2.style.display = "none";
        money.style.display = "none";
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

    money.style.display = "block";
    textHtml.innerHTML='<p>There are lot of money here. It could be from Mr.Wayen locker...<br></p>';
    next_button.innerHTML='Next';
    change = 'text';
    i=1;

    
})

go_back.addEventListener("click",function(){

    window.location.href = "living_room.php";
    
})