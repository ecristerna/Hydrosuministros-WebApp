<?php
$PageTitle="Formulario reparacion";
include_once('elements/header.php');
?>

    <title>Reparaciones</title>
    </head>

<?php include_once('elements/navbar.php');?>
    <script type="text/javascript">
        $('#repairs-nav').addClass("active");
    </script>
    <body>
    <div class="container-fluid">

        <div class="col-md-12">
            <h2>Envíenos una solicitud de reparación</h2>
            <hr>
        </div>
        <hr>

        <div class="col-md-12">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris porttitor orci dui, a eleifend metus consectetur nec. Nullam purus elit, malesuada sed sagittis sit amet, mollis sed justo. Morbi ante lectus, pretium vel accumsan ut, lobortis non mi. Donec faucibus euismod enim at rhoncus. In vehicula sodales egestas. Aenean lobortis, erat eu condimentum iaculis, nunc odio molestie turpis, ut tristique mi arcu et metus. Morbi facilisis risus ut euismod finibus.
            </p>
            <form action="/services/repairService.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <input class="form-control" id="Name" name="Nombre" placeholder="Nombre" type="text" required>
                        </div>
                        <div class="col-sm-6 form-group">
                            <input class="form-control" id="Empresa" name="Empresa" placeholder="Empresa" type="text" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <input class="form-control" id="Telefono" name="Telefono" placeholder="Télefono" type="text" required>
                        </div>
                        <div class="col-sm-6 form-group">
                            <input class="form-control" id="Email" name="Email" placeholder="Email" type="email" required>
                        </div>
                    </div>

                    <label class="control-label">Imagen de la pieza:</label>
                    <input id="Imagen" name="Imagen" type="file" class="file">
                    <br/>
                    <label for="comment">Descripción:</label>
                    <textarea class="form-control" rows="5" name="comment" id="comment"></textarea>
                </div>
                <button type="submit" class="btn btn-default">Enviar</button>
            </form>
        </div>

    </div>
    </body>

<?php
include_once('elements/footer.php');
?>
