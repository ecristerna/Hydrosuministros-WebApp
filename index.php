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
                    <img class="img img-responsive" src="images/pump.jpeg" alt="...">
                    <div class="carousel-caption">
                        <h3>Hello</h3>
                    </div>
                </div>
                <div class="item">
                    <img class="img img-responsive" src="images/motor.jpeg" alt="...">
                    <div class="carousel-caption">
                        <h3>World!</h3>
                    </div>
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
            <p class="indextext">
                Hydrosuministros Inteligentes S.A. de C.V. es una empresa distribuidora de Hydraulex Global, líder en el suministro y reparación de  bombas, motores, válvulas y cilindros para Aplicaciones Hidráulicas Industriales. Durante más de 5 años hemos ofrecido al mercado industrial mexicano servicios confiables y una amplia gama de productos nuevos y remanufacturados de las marcas más reconocidas en el mercado hidráulico con grandes valores agregados.
            </p>
                <div class="row indexfeatures">
                    <div class="col-md-3 indexcolumns">
                        <img class="img img-responsive indeximages" src="images/11warranty.png">
                        <h4>Excelente fiabilidad</h4>
                        <p>Es tal la confianza en la calidad de nuestros productos que ofrecemos 18 meses de garantía desde la compra y 12 meses de garantía de instalación.  </p>
                    </div>
                    <div class="col-md-3 indexcolumns">
                        <img class="img img-responsive indeximages" src="images/22quickship.png">
                        <h4>Disponibilidad inmediata</h4>
                        <p>Dado nuestro extenso inventario, podemos asegurar que tenemos las partes y refacciones que solicita y que está disponible para ser enviada garantizando un tiempo de entrega casi inmediato. </p>
                    </div>
                    <div class="col-md-3 indexcolumns">
                        <img class="img img-responsive indeximages" src="images/33reman.png" >
                        <h4>Calidad de remanufactura</h4>
                        <p>Tenemos un amplio inventario de bombas, motores, cilindros y partes  remanufacturadas, totalmente probadas y construidas en cumpliemiento de la especificación OEM (Original Equipment Manufacturer).</p>
                    </div>
                    <div class="col-md-3 indexcolumns">
                        <img class="img img-responsive indeximages" src="images/44repair.png">
                        <h4>Reparación de primera clase</h4>
                        <p>Tenemos la experiencia y el conocimiento para reparar y reconstruir componentes y cilindros encontrados en varias aplicaciones hidráulicas. Incluyendo bombas, motores, válvulas, servo/válvulas proporcionales entre otras.</p>
                    </div>
                </div>
        </div>
    </div>

    </body>

<?php
include_once('elements/footer.php');
?>

