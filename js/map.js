// iran
var lat = 32.427922 ;
var lng = 53.688011 ;
let OriginLatLngText = document.getElementById("orgineLatLng");
let destinationLatLng  = document.querySelector("#destinationLatLng")
let startPoint ;
let flag = false ;
let    Distance ;
let  destinationPoint ;
let destinationMark ;
let price ;
let PricePlace = document.querySelector("#PricePlace")
let orgineLatLng2 = document.querySelector("#orgineLatLng2");
let destinationLatLng2 = document.querySelector("#destinationLatLng2")
let price2 = document.querySelector("#price2");

function getDistance(startPoint, EndPoint){


      startLat = startPoint.lat();
      startLng = startPoint.lng();
      EndLat = EndPoint.lat();
      EndLng = EndPoint.lng();


      let Distance = Math.sqrt((startLat - startLng)**2 + (EndLat - EndLng)**2);

return Distance ;
}

function SettingsForMap(start, end)
{
//find the Distance
var DistanceService = new google.maps.Distancematrixservice();
DistanceService.getDistanceMatrix({
  origin : [start],
  destinations : [end],
  travelmode : google.maps.travelmode.WALKING,
  nuitesystem : google.maps.nuitesystem.METRIC,
  druationintraffic : true,
  avoidHighways : false,
  avoidTolls : false,

},
function (responsive, status){
  if(status !== google.maps.Distancematrixservice.OK) {
console.log(`Error`, status );
  }else {
console.log(Response);
}

  }
)
}


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
   draggable : true ,
 Animation : google.maps.Animation.BOUNCE,
 map: map ,
 });
 



 google.maps.event.addListener(OriginPoint ,  'click'  , function(){

startPoint = OriginPoint.getPosition();

OriginLatLngText.innerHTML =  startPoint.lat() + " / " + startPoint.lng()   ;
orgineLatLng2.value = startPoint.lat() + " / "  + startPoint.lng()  


let div1 = document.createElement('div');
let p = document.createElement('p');
let btn = document.createElement("button");

div1.style.width = "300px";
div1.style.height = "100px" ;
div1.style.position = "absolute";
div1.style.top = "40%";
div1.style.left = "40%";
div1.style.backgroundColor = "white";
div1.style.textAlign = "center"
div1.style.borderRadius = "10px"


p.style.fontSize = "20px";
p.style.fontWeight = "bold"


btn.style.width = "100px";
btn.style.height = "30px";
btn.style.backgroundColor = "black";
btn.style.color = "white";
btn.style.border=" 3px";
btn.style.border="solid";
btn.style.border="white";
btn.style.borderRadius="20px";


p.innerHTML = "now choose the destination" ;
btn.innerHTML = "OK";

document.body.append(div1);
div1.append(p);
div1.append(btn);

btn.addEventListener('click' , ()=>{ // this will be hide the alert
      div1.style.display = "none"


if (flag == false){

flag = true;

console.log(flag);

  let destinationMark = new google.maps.Marker({
      position: myCenter,
      draggable : true ,
    Animation : google.maps.Animation.BOUNCE,
    map: map ,
  
    });

  destinationMark.setMap(map);

  google.maps.event.addListener(destinationMark , 'click' , function(){

    
        destinationPoint = destinationMark.getPosition();

      destinationLatLng.innerHTML = destinationPoint.lat() + " / " + destinationPoint.lng() ;
      destinationLatLng2.value = destinationPoint.lat() + " / " + destinationPoint.lng() ;


       Distance = getDistance(startPoint, destinationPoint);
            console.log(Distance );

            PricePlace.innerHTML = Math.floor(Distance * 10) + "$"
            price2.value = Math.floor(Distance * 10) ;
    
            });

}


});

 });







    });




  } else {
    alert("Geolocation is not supported by this browser.");
  }







 






  }














