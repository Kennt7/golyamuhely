function kepValtas(event){
    event = event || window.event;
    var kivalasztottKep = event.target || event.srcElements;
    if(kivalasztottKep.tagName == "IMG")
        {
            document.getElementById("galeria").src =
                kivalasztottKep.getAttribute("src");
        }
}