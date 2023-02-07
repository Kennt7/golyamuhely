function atvalt() {
    $(document).ready(function() {
        $("#grafikak").click(function() {
            $("#szt1,#szt2,#szt3,#szt4,#szt5,#szt6").hide();
            $("#1,#2,#3,#4,#5,#6,#7,#8,#9,#10,#11,#12,#13,#14,#15,#16").show();
        });
        $("#szentek").click(function() {
            $("#1,#2,#3,#4,#5,#6,#7,#8,#9,#10,#11,#12,#13,#14,#15,#16").hide();
            $("#szt1,#szt2,#szt3,#szt4,#szt5,#szt6").show();
        });
    });

}