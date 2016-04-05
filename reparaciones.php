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
          <hr>

        <div class="row">
        <div class="col-md-6">
          <h3>Servo Valves</h3>
          <p>
            Debajo encontrará una lista de las unidades de valvulas servo que tenemos y que reparamos. Si no encuentra su unidad, no dude en contactarnos, posiblemente podemos asistirlo.
          </p>

          <div class="panel-group" id="accordion_one" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">

              <div class="panel-heading" role="tab" id="headingOne">
                <h4 class="panel-title">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_one" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    Servo Valves
                  </a>
                </h4>
              </div>

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
          <h3>Proportional Valves</h3>
          <p>
            Debajo encontrará una lista de las unidades de valvulas proporcionales que tenemos y que reparamos. Si no encuentra su unidad, no dude en contactarnos, posiblemente podemos asistirlo.
          </p>

          <div class="panel-group" id="accordion_two" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingTwo">
                <h4 class="panel-title">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_two" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Proportional Valves
                  </a>
                </h4>
              </div>
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
            <button type="button" class="btn btn-default" onclick="location.href='formulario_reparaciones.php';">Envíenos su solicitud de reparación</button>


        </div>
    </div>
    </body>

<?php
include_once('elements/footer.php');
?>
