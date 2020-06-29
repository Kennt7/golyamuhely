//var modal = document.getElementsByClassName("modal");

// Get the image and insert it inside the modal - use its "alt" text as a caption

/*var img = document.getElementsByClassName("kepek");
var modalImg = document.getElementsByClassName("modalKep");
var captionText = document.getElementsByName("felirat");
*/
var modal = document.getElementsByClassName("modal");
var img = document.getElementsByClassName("kepek");
var modalImg = document.getElementsByClassName("modalKep");
var captionText = document.getElementsByClassName("felirat");


img.onclick = function(){

    
    
    for(var i=0; i<img.length;i++){
        
        img[i];
    }
    
    for(var i=0; i<modalImg.length;i++){
       modalImg.src = this.src;

    }
    
    for(var i=0; i<captionText.length;i++){
        this.captionText[i].innerHTML = this.alt;
      
    }
    
    for(var i=0;i<modal.length;i++){
        this.modal[i].style.display = "block";
        
        
    }
 /*   
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;*/
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}