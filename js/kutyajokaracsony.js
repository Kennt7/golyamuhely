  tabcontent = document.getElementsByClassName("tab-content");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

tabcontent[0].style.displya = "block";

function fejezetmegnyitas(evt, fejezetnev) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tab-content");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the link that opened the tab
  document.getElementById(fejezetnev).style.display = "block";
  evt.currentTarget.className += " active";
}

function valt (){


$(document).ready(function(){
  $("#kezdoOldal").click(function(){
    $("#elsoFejezet,#masodikFejezet,#harmadikFejezet,#negyedikFejezet,#otodikFejezet").hide();
    $("#1,#2,#3,#4,#5,#6,#7,#8,#9,#10,#11,#12,#13,#14,#15,#16").show();
  });
  $("#szentek").click(function(){
    $("#1,#2,#3,#4,#5,#6,#7,#8,#9,#10,#11,#12,#13,#14,#15,#16").hide();
     $("#szt1,#szt2,#szt3,#szt4,#szt5,#szt6").show();
  });
});

}



//menu script

function menu(){
     $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
    
    
}
