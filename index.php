<?php
$PageTitle="Inicio";
include_once('elements/header.php');
?>
    <title>Inicio</title>
    </head>

    <?php include_once('elements/navbar.php');?>
    <script type="text/javascript">
        $('#index-nav').addClass("active");
    </script>
    <body>

    <div class="container-fluid">

        <!-- Carrousel -->
        <div id="carousel-home" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-home" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-home" data-slide-to="1"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img class="img img-responsive" src="images/MotoresArreglada.png" alt="...">
                </div>
                <div class="item">
                    <img class="img img-responsive" src="images/paletasArreglada.png" alt="...">
                </div>
                <div class="item">
                    <img class="img img-responsive" src="images/pistonesArreglada.png" alt="...">
                </div>
                <div class="item">
                    <img class="img img-responsive" src="images/reparacionesArreglada.png" alt="...">
                </div>
                <div class="item">
                    <img class="img img-responsive" src="images/EngranesArreglada.png" alt="...">
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-home" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-home" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <div class="col-md-12">
            <h1>Hydrosuministros Inteligentes S.A. de C.V.</h1>
            <h4> LA SOLUCIÓN INTELIGENTE A SUS NECESIDADES DE HIDRÁULICA INDUSTRIAL O MÓVIL </h4>
            <hr>
            <p class="text">
                Es una empresa Mexicana líder en el suministro y reparación de Bombas, Motores y Válvulas (Hidráulicas, Proporcionales y Servos) orientados para aplicaciones de Industriales. Durante más de 9 años hemos ofrecido a al mercado Mexicano servicios confiables y una amplia gama de productos Nuevos Originales, Remanufacturados, Nuevos (Genéricos) de las marcas más reconocidas en la Industria con un valor agregado basado en tiempos de entrega cortos.
            </p>
            <p class="text">
                Representamos en México a HYDRAULEX GLOBAL ofreciendo su amplia gama de productos y servicios.
            </p>
                <div class="row indexfeatures">
                    <div class="col-md-3 indexcolumns">
                        <img class="img img-responsive indeximages" src="images/11warranty.png">
                        <h4>Excelente fiabilidad</h4>
                        <p class="text"> Es tal la confianza en la calidad de nuestros productos que ofrecemos 18 meses de garantía desde la compra y 12 meses de garantía de instalación.  </p>
                    </div>
                    <div class="col-md-3 indexcolumns">
                        <img class="img img-responsive indeximages" src="images/22quickship.png">
                        <h4>Disponibilidad inmediata</h4>
                        <p class="text">Contamos con un inventario amplio de Equipo Estándar que garantiza un tiempo de entrega adecuado a sus necesidades. </p>
                    </div>
                    <div class="col-md-3 indexcolumns">
                        <img class="img img-responsive indeximages" src="images/33reman.png" >
                        <h4>Calidad de remanufactura</h4>
                        <p class="text">Tenemos la posibilidad de proveer Bombas, Motores y Válvulas Hidráulicas Remanufacturadas para que usted cuente con el respaldo del equipo originalmente instalado en su maquinaría.</p>
                    </div>
                    <div class="col-md-3 indexcolumns">
                        <img class="img img-responsive indeximages" src="images/44repair.png">
                        <h4>Reparación de primera clase</h4>
                        <p class="text">Experiencia y conocimiento para reparar y reconstruir componentes hidráulicos tales como Bombas, Motores, Válvulas Hidráulicas y Proporcionales. Ofrecemos reparaciones certificadas con reportes de prueba de los componentes.</p>
                    </div>
                </div>
        </div>
    </div>

    </body>

<?php
include_once('elements/footer.php');
?>

