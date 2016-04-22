<?php
$PageTitle="Reparaciones";
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
          <h2>Servicios de Reparación</h2>
            <h4> CONVERTIMOS TU SCRAPP EN MATERIAL PRODUCTIVO REDUCIENDO TUS COSTOS DE MANTENIMIENTO </h4>
            <hr>
          <div class="row">
            <div class="col-md-9">
                    <h4>Refacciones para Bombas y Motores de Pistones, Paletas  y Engranes</h4>
                    <p class="text">
                        Hydrosuministros ofrece una amplia línea de refacciones para Bombas y Motores de Pistones, Paletas y Engranes que cumplen o exceden la especificación OEM. Esto incluye a fabricantes como Kawasaki®, Rexroth®, Sundstrand®, Linde®, Vickers® y Denison®. Tambien almacenamos partes de reemplazo OEM para varios fabricantes importantes: Kawasaki®, Rexroth®, Sundstrand®, Linde®, Vickers, Denison®, Eaton® y muchos más.
                    </p>
                    <button type="button" class="btn btn-default repBtn" onclick="location.href='formulario_reparaciones.php';">Envíenos su solicitud de reparación</button>
                </div>
            <div class="col-md-3">
                <img class="img img-responsive siteimages" src="images/reemplazos.jpg" >
            </div>
          </div>

        <div class="row">
        <div class="col-md-6">
          <h4>Servoválvulas</h4>
          <p class="text">
            Debajo encontrará una lista de las unidades de válvulas servo que tenemos y que reparamos. Si no encuentra su unidad, no dude en contactarnos, posiblemente podemos asistirlo.
          </p>

          <div class="panel-group" id="accordion_one" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_one" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                    Servoválvulas
                </h4>
              </div>
            </a>

              <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">
                  <dl>
                    <dt>Abex&reg;</dt>
                    <dt>Atchley&reg;</dt>
                    <dt>Bosch&reg;/Rexroth&reg;</dt>
                    <dt>Dyval&reg;</dt>
                    <dt>HR Textron&reg;</dt>
                    <dt>Moog&reg;</dt>
                    <dt>MTS&reg;</dt>
                    <dt>Oilgear&reg;</dt>
                    <dt>Schenck-Pegasus&reg;</dt>
                    <dt>Vickers&reg;</dt>
                  </dl>
                </div>
              </div>
            </div>
          </div>

        </div>

        <div class="col-md-6">
          <h4>Válvulas Proporcionales</h4>
          <p class="text">
            Debajo encontrará una lista de las unidades de válvulas proporcionales que tenemos y que reparamos. Si no encuentra su unidad, no dude en contactarnos, posiblemente podemos asistirlo.
          </p>

            <div class="panel-group" id="accordion_two" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">

                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_two" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                Proportional Valves
                            </h4>
                        </div>
                    </a>

              <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                <div class="panel-body">
                  <dl>
                    <dt>Atos&reg;</dt>
                    <dt>Bosch&reg;/Rexroth&reg;</dt>
                    <dt>Denison&reg;</dt>
                    <dt>Moog&reg;/Hydrolux&reg;</dt>
                    <dt>Parker&reg;</dt>
                    <dt>Sundstrand&reg;</dt>
                    <dt>Uchida&reg;</dt>
                    <dt>Vickers&reg;</dt>
                  </dl>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    </body>

<?php
include_once('elements/footer.php');
?>
