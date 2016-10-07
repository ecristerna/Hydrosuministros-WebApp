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
        success: function(response) {
            for (var i = 0; i < response.results.length; i++) {
                var result = response.results[i];
                console.log(result);
                var currentHTML = '<tr>';
                currentHTML += '<td>' + result.sku + '</td>';
                currentHTML += '<td>' + result.nombre + '</td>';
                currentHTML += (result.imagen !== '') ? '<td><img src="images/' + result.imagen + '</td>' : '<td></td>';
                currentHTML += '<td>' + result.descripcion + '</td>';
                currentHTML += '<td>' + result.cantidad + '</td>';
                currentHTML += '</tr>';

                $("#tableProductsBody").append(currentHTML);
                currentHTML = '';
            }

            loadDataTables();
        },
        error: function(errorMsg){
            alert(errorMsg.statusText);
        }
    });

});

function loadDataTables() {
    $('#tableProducts').DataTable();
}
