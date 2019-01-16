$(document).ready(function(){
    showHoroscope();

    function showHoroscope() {
        $.ajax({
            url: "viewHoroscope.php",
            method: "GET",
            data: {
                birthNR: $("#birthNR").val()
            },
            success: function(run) {
                $("#myHoro").html(run);

                $('#myHoro').hide();
                $('#myHoro').fadeIn(3000);
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
            success: function(run){
               $("#myHoro").html(run);
               showHoroscope();
            }  
        });
    };

    updateIT = function(){
        $.ajax({
            url: "updateHoroscope.php",
            method: "PUT",
            data:{
                birthNR: $("#birthNR").val()
            },
            success: function(run){
                $("#myHoro").html(run);  
                viewHoroscope();
            }
        });
      
    };

    deleteIT = function(){
        $.ajax({
            url: "deleteHoroscope.php",
            method: "DELETE",

            success: function(run){
                $("#myHoro").html(run);
                viewHoroscope();
            }
        });
    };

});