/**
 * Created by Cesar on 4/11/2016.
 */
$( document ).on('ready', function() {
    $.ajax({
        type: "POST",
        url: "services/productService.php",
        dataType: "json",
        data: {},
        headers: {'Content-Type': 'application/x-www-form-urlencoded'},
        success: function(jsonData) {
            delete jsonData.message;
            $.each(jsonData, function(i, e) {
                // prepare the html content to be added
                console.log(jsonData);
                var content = "<tr> <td>" + e['id'] + "</td> "
                    + " <td>" + e['name'] + "</td> "
                    + ' <td><img src="images/' + e['img'] + '"></td> "'
                    + " <td>" + e['descripcion'] + "</td> </tr>";
                var tableBody = $("#tableProductsBody");
                tableBody.append(content);
            });
            loadDataTables();
        },
        error: function(errorMsg){
            //alert("ERROR");
            alert(errorMsg.statusText);
        }
    });

});

function loadDataTables() {
    $('#tableProducts').DataTable();
}
