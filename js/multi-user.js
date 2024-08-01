let scrollWrapperUser = document.querySelector("#scrollWrapperUser");

let next = document.querySelector("#next")
let per = document.querySelector("#per")


next.addEventListener('click' , function(){

        scrollWrapperUser.scrollTo(0 , scrollWrapperUser.scrollHeight )

} )
per.addEventListener('click' , function(){

        scrollWrapperUser.scrollTo( 0 , 0)

} )