/**
 * Created by Cesar on 4/11/2016.
 */
$( document ).on('ready', function() {
    var jsonObject = {
        // DO WE NEED A JSON OBJECT?
        "userName" : ""
    };

    $.ajax({
        type: "POST",
        url: "/Hydrosuministros-WebApp/services/productService.php",
        dataType: "json",
        data: jsonObject,
        headers: {'Content-Type': 'application/x-www-form-urlencoded'},
        success: function(jsonData) {
            delete jsonData.message;
            $.each(jsonData, function(i, e) {
                // prepare the html content to be added
                var content = " <td>" + e['CCODIGOPRODUCTO'] + "</td> "
                    + " <td>" + e['CNOMBREPRODUCTO'] + "</td> "
                    + " <td>" + e['CFOTOPRODUCTO'] + "</td> " // IMAGE MUST BE TREATED DIFFERENTLY
                    + " <td>" + e['CDESCRIPCIONPRODUCTO'] + "</td> ";
                var tableBody = $("#tableProductsBody");
                tableBody.append(content);
            });
        },
        error: function(errorMsg){
            alert(errorMsg.statusText);
        }
    });

});