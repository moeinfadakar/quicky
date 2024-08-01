let lat = 32.427922;
let lng = 53.688011 ;
let OriginPoint ;

let ID = document.querySelector("#ID");
let csrf = document.querySelector("#csrf").value


function myMap() {
      var mapProp= {
        center:new google.maps.LatLng( lat  , lng  ),
        zoom:10,
      };
      var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
    
    
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position){
     lat = position.coords.latitude;
     lng = position.coords.longitude;
    
         var myCenter = new google.maps.LatLng(lat , lng);
     map.setCenter(myCenter);
     
         let OriginPoint = new google.maps.Marker({
       position: myCenter,
       draggable : false ,
     Animation : google.maps.Animation.BOUNCE,
     map: map ,
  title:'you are Here'
     });

     OriginPoint.setMap(map);
  
let startWork = document.querySelector("#startWork");

startWork.addEventListener("click" , ()=>{

        let LNGLAT = {
                lat:lat,
                lng:lng,
                user_id : ID,
         }



         fetch('/readyForWork', {
          method: "POST",
          body: JSON.stringify(LNGLAT), 
          headers: {
            "Content-Type": "application/json",
            "Accept": "application/json",
            "X-Requested-With": "XMLHttpRequest", 
            "X-CSRF-Token": csrf ,
          },
        }).then(result => result.text()).then(result => {
             
            alert(result);
    
        });



})





  
  
     });
}
}   
  








function DeleteRequest(ID){
$requestThatWillBeDelete = document.getElementById("request"+ID);


thisRequest.style.display = "none"


}







