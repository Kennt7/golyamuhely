/*
function kepValasztas(evt,id){
    
    var i,carouselCaption,tablinks;
    
    
//összes carouselCaption elem elérése és elrejtése
    carouselCaption = document.getElementsByClassName("carousel-caption");
    for(i=0;i<carouselCaption.length;i++){
        carouselCaption[i].style.display = "none";
    }


//összes tablinks osztály elérése és az active osztály törlése

tablinks = document.getElementsByClassName("tablinks");
for(i=0;i<tablinks.length;i++){
    tablinks[i].className = tablinks[i].className.replace("active","");
}

//Aktuális tab mutatása, active class hozzáadása a linkhez ami megnyitja a fület
document.getElementById("k1").style.display = "block";
evt.currentTarget.className += "active";

}//függvény vége

*/

$(document).ready(function(){
    $('#kioldogomb').on('click',function(){
        $('#sidebar').toggleClass('active');
    });
});


$(document).ready(function(){
  // Activate the Carousel, but pause it from the start
  $("#myCarousel").carousel("pause");
        
  // Go to the second item
  $("#myBtn").click(function(){
    $("#myCarousel").carousel("prev");
  });

  // Go to the third item
  $("#btnElore").click(function(){
    $("#myCarousel").carousel("next");
  

  });
    
  // Enable Carousel Indicators
  $(".item1").click(function(){
    $("#myCarousel").carousel(0);
  });
  $(".item2").click(function(){
    $("#myCarousel").carousel(1);
  });
  $(".item3").click(function(){
    $("#myCarousel").carousel(2);
  });
    
  // Enable Carousel Controls
  $(".carousel-control-prev").click(function(){
    $("#myCarousel").carousel("prev");
  });
  $(".carousel-control-next").click(function(){
    $("#myCarousel").carousel("next");
  });
});


