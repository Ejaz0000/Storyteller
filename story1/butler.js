let next_button = document.querySelector(".next");
let textHtml = document.querySelector(".text");
let dialogue = document.querySelector(".dialogue-box");
let boots = document.querySelector(".boots");
let boots2 = document.querySelector(".boots2");
let wardrobe = document.querySelector(".wardrobe");
let select_wardrobe = document.querySelector(".wardrobe-select");
let drawer1 = document.querySelector(".drawer-select");
let drawer2 = document.querySelector(".drawer2-select");
let bullets = document.querySelector(".bullets");
let go_back =  document.querySelector(".to-living-room");

let change = 'scene';
let i=0;


next_button.addEventListener("click", function(){

    
   
    if(change == 'text'){
        
        if(boots2.style.display == "block"){

            textHtml.innerHTML='<p>Could it be that someone is trying to frame the butler and put these boots in his room... <br></p>';
            next_button.innerHTML='Back';
            change = 'scene';
        }

        else if(bullets.style.display == "block"){

            
                if(i==1){
                    textHtml.innerHTML='<p>According to the butler statement, these bullets are given by his master to keep it safe in case of emergency use..<br></p>';
                    next_button.innerHTML='Back';
                    change = 'scene';
                    
                }
               
    
           
        }
        else {

        textHtml.innerHTML='<p>...<br></p>';
        change = 'scene';
        }
        
    }
    
    else {

        if(bullets.style.display == "block"){
            bullets.style.display = "none"; 
            textHtml.innerHTML='<p>Check the drawers...<br></p>';

        }

        else{
        go_back.style.display = "block" ;
        dialogue.style.display = "none";
        boots.style.display = "block";
        wardrobe.style.display = "block";
        boots2.style.display = "none";
        next_button.innerHTML='Next';
        select_wardrobe.style.display = "none";
        drawer1.style.display = "none";
        drawer2.style.display = "none";
        }
    }
 

});

boots.addEventListener("click", function(){

    dialogue.style.display = "block";
    dialogue.style.top =  "64%" ;
    boots2.style.display = "block";
    textHtml.innerHTML='<p>There is blood on the boots. It seems Mr.Wayen&#39;s blood. this must be killer&#39;s shoes but it does not seems like the butler&#39;s boots the size is too small for him. It is more likely a woman size...<br></p>';
    change = 'text';
    go_back.style.display = "none" ;

});



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

    bullets.style.display = "block";
    textHtml.innerHTML='<p>There are some bullets in the drawer! It should be from Mr.Wayen&#39;s gun. But why are these here...<br></p>';
    next_button.innerHTML='Next';
    change = 'text';
    i=1;

    
})

go_back.addEventListener("click",function(){

    window.location.href = "living_room.php";
    
})