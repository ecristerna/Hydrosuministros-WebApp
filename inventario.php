<?php
$PageTitle="Inventario";
include_once('elements/header.php');
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
            <h1>Inventario</h1>
            <hr>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris porttitor orci dui, a eleifend metus consectetur nec. Nullam purus elit, malesuada sed sagittis sit amet, mollis sed justo. Morbi ante lectus, pretium vel accumsan ut, lobortis non mi. Donec faucibus euismod enim at rhoncus. In vehicula sodales egestas. Aenean lobortis, erat eu condimentum iaculis, nunc odio molestie turpis, ut tristique mi arcu et metus. Morbi facilisis risus ut euismod finibus. Fusce facilisis felis in orci dictum, id malesuada nulla facilisis. Etiam dolor purus, ultrices ac rutrum nec, condimentum blandit magna. Integer non convallis nibh. Maecenas molestie ligula non dui efficitur, nec lobortis orci faucibus. Nullam maximus nulla quam. Pellentesque a facilisis sapien. Nam at massa diam.
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
                </tr>
                </thead>

                <tbody id="tableProductsBody">
                <tr>
                    <td>ID</td>
                    <td>Nombre</td>
                    <td>Imagen</td>
                    <td>Descripcion</td>
                </tr>
                </tbody>
            </table>
        </div>

    </div>

    </body>

<?php
include_once('elements/footer.php');
?>
