<?php
$PageTitle="Inventario";
include_once('elements/header.php');
if(!isset($_SESSION["username"])) {
    header("Location: login.php");
    die();
}

?>

    <title>Inventario</title>

    <?php include_once('elements/navbar.php');?>
    <script type="text/javascript">
        $('#inventory-nav').addClass("active");
    </script>
<!-- <script src="js/products.js" type="text/javascript"></script> -->
    <body>

    <div class="container-fluid">

        <div class="col-md-12">
            <h2>Inventario</h2>
            <hr>
            <p class="text">
                Tenemos un amplio inventario de bombas, motores y partes  remanufacturadas, totalmente probadas y construidas en cumplimiento de la especificación OEM (Original Equipment Manufacturer).
                Dado nuestro extenso inventario, podemos asegurar que tenemos las partes y refacciones que solicita y que están disponible para ser enviadas garantizando un tiempo de entrega adecuado.
            </p>
        </div>

        <div class="col-md-12">
            <table class="table table-striped" id="tableProducts">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Imagen</th>
                    <th>Descripción</th>
                </tr>
                </thead>

                <tbody id="tableProductsBody">
                <tr>
                    <td>ID</td>
                    <td>Nombre</td>
                    <td>Imagen</td>
                    <td>Descripción</td>
                </tr>
                </tbody>
            </table>
        </div>

    </div>

    </body>

<?php
include_once('elements/footer.php');
?>
