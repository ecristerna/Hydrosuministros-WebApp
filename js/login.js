/**
 * Created by Cesar on 4/8/2016.
 */
$( document ).on('ready', function() {
    $("#lb").on("click", function(e){
        e.preventDefault();

        var jsonObject = {
            "email" : $("#email").val(),
            "userPassword" : $("#password").val()
        };

        $.ajax({
            type: "POST",
            url: "services/loginService.php",
            dataType: "json",
            data: jsonObject,
            headers: {'Content-Type': 'application/x-www-form-urlencoded'},
            success: function(jsonData) {
                window.location.href = "index.php";
            },
            error: function(errorMsg){
                alert("Error al iniciar sesión. Inténtelo nuevamente.");
            }
        });
    });
});
