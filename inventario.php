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
    <script src="js/products.js" type="text/javascript"></script>
    <body>

    <div class="container-fluid">

        <div class="col-md-12">
            <h1>Inventario</h1>
            <hr>
            <p>
                Contamos con un amplio inventario en productos para su comodidad.
            </p>
        </div>

        <div class="col-md-12">
            <table class="table table-striped" id="tableProducts">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Imagen</th>
                    <th>Descripcion</th>
                    <th>Cantidad</th>
                </tr>
                </thead>

                <tbody id="tableProductsBody">
                </tbody>
            </table>
        </div>

    </div>

    </body>
<?php
include_once('elements/footer.php');
?>
