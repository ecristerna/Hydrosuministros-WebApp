<?php
$PageTitle="Registro";
include_once('elements/header.php');
?>
    <title>Registro</title>

    <?php include_once('elements/navbar.php');?>
    <script type="text/javascript">
        $('#registro-nav').addClass("active");
    </script>
    <body>

    <div class="container-fluid">

        <div class="col-md-6 col-md-offset-3">
            <div class="row">
                <h1 class="text-center">Forma de registro</h1>
            </div>

            <div class="col-md-12">
                <!-- <form action="sendRegistration.php" method="post" enctype="multipart/form-data"> -->
                    <div class="form-group">
                        <label for="nombre">Nombre Completo</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="empresa">Empresa</label>
                        <input type="text" class="form-control" id="empresa" name="empresa" required>
                    </div>
                    <div class="form-group">
                        <label for="puesto">Puesto</label>
                        <input type="text" class="form-control" id="puesto" name="puesto" required>
                    </div>
                    <div class="form-group">
                        <label for="telefono">Telefono</label>
                        <input type="text" class="form-control" id="telefono" name="telefono" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Correo</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label>¿Cómo se enteró de nosotros?</label>
                        <div class="checkbox">
                            <label>
                              <input type="checkbox" id="anuncio" name="anuncio"> Anuncio
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                              <input type="checkbox" id="recomendacion" name="recomendacion"> Recomendación
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                              <input type="checkbox" id="internet" name="internet"> Internet
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                              <input type="checkbox" id="otra" name="otra"> Otra
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-default" id = "sendEmailButton">Enviar solicitud de registro</button>
                    </div>
                <!-- </form> -->
            </div>

        </div>

    </div>

    <script type="text/javascript">
            $(document).on("ready", function() {

                $("#sendEmailButton").on("click", function() {
                   var parameters = {
                       "nombre" : $("#nombre").val(),
                       "empresa" : $("#empresa").val(),
                       "puesto" : $("#puesto").val(),
                       "telefono" : $("#telefono").val(),
                       "email" : $("#email").val(),
                    };

                    if ($("#nombre").val() != "" || $("#email").val() != "") {
                        $.ajax({
                            type: "POST",
                            url: "sendRegistration.php",
                            dataType: "json",
                            data: parameters,
                            headers: {'Content-Type': 'application/x-www-form-urlencoded'},
                            success: function(jsonData) {
                                // alert("Mensaje enviado");
                            },
                            error: function(message) {
                                // alert("Error");
                            }
                        });
                    } else {
                        alert("Por favor completa todos los campos");
                    }
                });
            });
        </script>
    </body>

<?php
include_once('elements/footer.php');
?>
