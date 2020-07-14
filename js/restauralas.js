
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


 


function magnify(imgID, zoom) {
  var img, glass, w, h, bw;
  img = document.getElementById(imgID);
  /*create magnifier glass:*/
  glass = document.createElement("DIV");
  glass.setAttribute("class", "img-magnifier-glass");
  /*insert magnifier glass:*/
  img.parentElement.insertBefore(glass, img);
  /*set background properties for the magnifier glass:*/
  glass.style.backgroundImage = "url('" + img.src + "')";
  glass.style.backgroundRepeat = "no-repeat";
  glass.style.backgroundSize = (img.width * zoom) + "px " + (img.height * zoom) + "px";
  bw = 3;
  w = glass.offsetWidth / 2;
  h = glass.offsetHeight / 2;
  /*execute a function when someone moves the magnifier glass over the image:*/
  glass.addEventListener("mousemove", moveMagnifier);
  img.addEventListener("mousemove", moveMagnifier);
  /*and also for touch screens:*/
  glass.addEventListener("touchmove", moveMagnifier);
  img.addEventListener("touchmove", moveMagnifier);
  function moveMagnifier(e) {
    var pos, x, y;
    /*prevent any other actions that may occur when moving over the image*/
    e.preventDefault();
    /*get the cursor's x and y positions:*/
    pos = getCursorPos(e);
    x = pos.x;
    y = pos.y;
    /*prevent the magnifier glass from being positioned outside the image:*/
    if (x > img.width - (w / zoom)) {x = img.width - (w / zoom);}
    if (x < w / zoom) {x = w / zoom;}
    if (y > img.height - (h / zoom)) {y = img.height - (h / zoom);}
    if (y < h / zoom) {y = h / zoom;}
    /*set the position of the magnifier glass:*/
    glass.style.left = (x - w) + "px";
    glass.style.top = (y - h) + "px";
    /*display what the magnifier glass "sees":*/
    glass.style.backgroundPosition = "-" + ((x * zoom) - w + bw) + "px -" + ((y * zoom) - h + bw) + "px";
  }
  function getCursorPos(e) {
    var a, x = 0, y = 0;
    e = e || window.event;
    /*get the x and y positions of the image:*/
    a = img.getBoundingClientRect();
    /*calculate the cursor's x and y coordinates, relative to the image:*/
    x = e.pageX - a.left;
    y = e.pageY - a.top;
    /*consider any page scrolling:*/
    x = x - window.pageXOffset;
    y = y - window.pageYOffset;
    return {x : x, y : y};
  }
}


/* Initiate Magnify Function
with the id of the image, and the strength of the magnifier glass:*/
magnify("r1", 3);