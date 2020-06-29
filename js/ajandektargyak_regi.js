// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("kep1");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

/*function kep_szoveg_valtasok(el){
    var kepforras = el.src;
    var altText = el.alt;
    modal.style.display = "block";
    modalImg.src = kepforras;
    captionText.innerHTML = altText;
    
    window.onclick = function (event){
        if(event.target == modal){
            modal.style.display = "none";
        }
    }
}*/