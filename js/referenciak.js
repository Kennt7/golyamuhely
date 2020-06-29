const content=
      '<div class="row">
            <div class="col-sm-6 col-md-3">
                <img class="img-fluid" src="./img/737x300.jpg"> alt="Image">
            </div>

            <div class="col-sm-6 col-md-3">
                <img class="img-fluid" src="./img/737x300.jpg"> alt="Image">
            </div>
        
            <div class="col-sm-6 col-md-3">
                <img class="img-fluid" src="./img/737x300.jpg"> alt="Image">
            </div>

            <div class="col-sm-6 col-md-3">
                <img class="img-fluid" src="./img/737x300.jpg"> alt="Image">
            </div>
        </div>

        
        
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <img class="img-fluid" src="./img/737x300.jpg">
            </div>

            <div class="col-sm-6 col-md-3">
                <img class="img-fluid" src="./img/737x300.jpg">
            </div>

            <div class="col-sm-6 col-md-3">
                <img class="img-fluid" src="./img/737x300.jpg">
            </div>

            <div class="col-sm-6 col-md-3">
                <img class="img-fluid" src="./img/737x300.jpg">
            </div>
        </div>


        <div class="row">
            <div class="col-sm-6 col-md-3">
                <img class="img-fluid" src="./img/737x300.jpg">
            </div>

            <div class="col-sm-6 col-md-3">
                <img class="img-fluid" src="./img/737x300.jpg">
            </div>

            <div class="col-sm-6 col-md-3">
                <img class="img-fluid" src="./img/737x300.jpg">
            </div>

            <div class="col-sm-6 col-md-3">
                <img class="img-fluid" src="./img/737x300.jpg">
            </div>
        </div>

        
        $('#my-pagination').bootpag({
            total:5,
            page:1,
            maxVisible:5
        }).on('page',function(event,num){
            $("#my-pagination-content").html("Page"+num+content);//or some ajax content loading
        });

        $("#my-pagination-content").html("Page1"+content);










'