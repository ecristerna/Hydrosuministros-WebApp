<?php
$PageTitle="Registro";
include_once('../elements/header.php');
?>
    <title>Registro</title>

    <?php include_once('../elements/navbar.php');?>
    <script type="text/javascript">
        $('#registro-nav').addClass("active");
    </script>
    <body>

    <div class="container-fluid">

        <div class="col-md-12">
            <div class="row">
                <h1>Forma de registro</h1>
            </div>

            <div class="col-md-6">
                <form>
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
                              <input type="checkbox" id="anuncio" name="anuncio" required> Anuncio
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                              <input type="checkbox" id="recomendacion" name="recomendacion" required> Recomendación
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                              <input type="checkbox" id="internet" name="internet" required> Internet
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                              <input type="checkbox" id="otra" name="otra" required> Otra
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Enviar solicitud de registro</button>
                    </div>

                </form>
            </div>

        </div>

    </div>

    </body>

<?php
include_once('../elements/footer.php');
?>