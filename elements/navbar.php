<nav class="navbar navbar-default">
    <div id="navbar_conatiner" class="container-fluid">
        <a href="index.php">
            <img id="logo" class="logo" src="images/HydroSuministros_HD_LOGO.png" alt="Hydrosuministros Inteligentes" >
        </a>
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li id="index-nav"><a href="index.php">Inicio <span class="sr-only">(current)</span></a></li>
                <li id="about-nav"><a href="quienessomos.php">Quiénes Somos</a></li>
                <li id="product-nav" class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Productos <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li id="valves-nav"><a href="valvulas.php">Válvulas</a></li>
                        <li id="pumps-nav"><a href="bombas.php">Bombas</a></li>
                        <li id="motors-nav"><a href="motores.php">Motores</a></li>
                    </ul>
                </li>
                <li id="repairs-nav"><a href="reparaciones.php">Servicios de Reparación</a></li>
                <?php if (isset($_SESSION["username"])) {
                    echo '<li id="inventory-nav"><a href="inventario.php">Inventario</a></li>';
                } ?> 
                <li class="login-nav hidden-lg hidden-md"><a href="login.php">Login</a></li>
                <li class="registro-nav hidden-lg hidden-md"><a href="registro.php">Registro</a></li>
            </ul>
            <ul class="nav navbar-nav pull-right hidden-sm hidden-xs">
                <?php if (!isset($_SESSION["username"])) {
                    echo '<li class="login-nav"><a href="login.php">Login</a></li>';
                    echo '<li class="registro-nav"><a href="registro.php">Registro</a></li>';
                } else { 
                    echo '<li id="logout-nav"><a href="logout.php">Logout</a></li>';
                } ?> 
            </ul>

            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
