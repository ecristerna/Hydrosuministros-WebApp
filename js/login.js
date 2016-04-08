/**
 * Created by Cesar on 4/8/2016.
 */
$( document ).on('ready', function() {
    $("#lb").on("click", function(){
        var jsonObject = {
            "userName" : $("#email").val(),
            "userPassword" : $("#password").val(),
        };

        $.ajax({
            type: "POST",
            url: "/Hydrosuministros-WebApp/services/loginService.php",
            dataType: "json",
            data: jsonObject,
            headers: {'Content-Type': 'application/x-www-form-urlencoded'},
            success: function(jsonData) {
                alert("Bienvenido " + jsonData.username);
                window.location.href ="/Hydrosuministros-WebApp/index.php";
            },
            error: function(errorMsg){
                alert(errorMsg.statusText);
            }
        });
    });
});