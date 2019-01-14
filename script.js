$(document).ready(function(){
    showHoroscope();

    function showHoroscope() {
        $.ajax({
            url: "viewHoroscope.php",
            method: "GET",
            data: {
                birthNR: $("#birthNR").val()
            },
            success: function(test) {
                $("#myHoro").html(test);
            }
        });
        
    }

    saveIT = function(){
        $.ajax({
            url:"addHoroscope.php",
            method: "POST",
            data: {
                birthNR: $("#birthNR").val()
            },
            success: function(test){
               $("#myHoro").html(test);
               showHoroscope();
            }  
        });
    };

});