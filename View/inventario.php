<?php
$PageTitle="Inventario";
include_once('../elements/header.php');
?>

    <title>Inventario</title>
    </head>

    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Hydrosuministros Inteligentes</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Inicio <span class="sr-only">(current)</span></a></li>
                    <li><a href="quienessomos.php">Quiénes Somos</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Productos <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="valvulas.php">Valvulas</a></li>
                            <li><a href="bombas.php">Bombas</a></li>
                            <li><a href="motores.php">Motores</a></li>
                        </ul>
                    </li>
                    <li><a href="reparaciones.php">Servicios de Reparación</a></li>
                    <li class="active"><a href="#">Inventario</a></li>

                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <body>

    <div class="container-fluid">

        <div class="col-md-12">
            <h1>Inventario</h1>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris porttitor orci dui, a eleifend metus consectetur nec. Nullam purus elit, malesuada sed sagittis sit amet, mollis sed justo. Morbi ante lectus, pretium vel accumsan ut, lobortis non mi. Donec faucibus euismod enim at rhoncus. In vehicula sodales egestas. Aenean lobortis, erat eu condimentum iaculis, nunc odio molestie turpis, ut tristique mi arcu et metus. Morbi facilisis risus ut euismod finibus. Fusce facilisis felis in orci dictum, id malesuada nulla facilisis. Etiam dolor purus, ultrices ac rutrum nec, condimentum blandit magna. Integer non convallis nibh. Maecenas molestie ligula non dui efficitur, nec lobortis orci faucibus. Nullam maximus nulla quam. Pellentesque a facilisis sapien. Nam at massa diam.
            </p>
        </div>

        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Imagen</th>
                    <th>Descripcion</th>
                </tr>
                </thead>

                <tbody>
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

    <body>

<?php
include_once('../elements/footer.php');
?>