let next1 = document.getElementById("next1");
let next2 = document.getElementById("next2");
let per1 = document.getElementById("per1");
let per2 = document.getElementById("per2");

let scrollWrapper = document.querySelector("#scrollWrapper");

let heightScroll = scrollWrapper.scrollHeight ;

if (next1 && next2 && per1 && per2){

   next1.addEventListener('click' , function(){

      scrollWrapper.scrollTo(0 , heightScroll / 2.9  )
 
 })
 next2.addEventListener('click' , function(){
 
    scrollWrapper.scroll(0,heightScroll)
 
 })
 per1.addEventListener('click' , function(){
 
    scrollWrapper.scrollTo(0,0)
   
 
    
 })
 per2.addEventListener('click' , function(){
    scrollWrapper.scrollTo(0,heightScroll / 2.9 )
       
 
 })


}







