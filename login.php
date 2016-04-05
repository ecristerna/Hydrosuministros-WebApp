<?php
$PageTitle="Login";
include_once('elements/header.php');
?>
    <title>Login</title>

    <?php include_once('elements/navbar.php');?>
    <script type="text/javascript">
        $('#login-nav').addClass("active");
    </script>
    <body>

    <div class="container-fluid">

        <div class="col-md-12">
            <div class="row text-center">
                <h1>Login</h1>
            </div>

            <div class="col-md-6 col-md-offset-3">
                <form method = 'POST'>
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Correo" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-default btn-block center-block">Iniciar sesión</button>
                    </div>

                </form>
            </div>

        </div>

    </div>

    </body>

<?php
include_once('elements/footer.php');
?>
