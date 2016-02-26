<?php
$PageTitle="Reparaciones";
include_once('../elements/header.php');
?>

    <title>Reparaciones</title>
    </head>

    <?php include_once('../elements/navbar.php');?>
    <script type="text/javascript">
        $('#repairs-nav').addClass("active");
    </script>
    <body>

    <div class="container-fluid">

        
    <div class="col-md-12">
      <h2>Servicios de Reparación</h2>
      <hr></hr>

    <div class="row">
    <div class="col-md-6">
      <h3>Servo Valves</h3>
      <p>
        Below is a list of Servo valve units we commonly stock and repair. Please contact us if you don't see your unit listed, chances are we can still assist you.
      </p>

      <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default">
          
          <div class="panel-heading" role="tab" id="headingOne">
            <h4 class="panel-title">
              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
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
        Below is a list of Proportional valve units we commonly stock and repair. Please contact us if you don't see your unit listed, chances are we can still assist you.
      </p> 

      <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingTwo">
            <h4 class="panel-title">
              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
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
    
    <hr></hr>

    <div class="row">
      <p>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris porttitor orci dui, a eleifend metus consectetur nec. Nullam purus elit, malesuada sed sagittis sit amet, mollis sed justo. Morbi ante lectus, pretium vel accumsan ut, lobortis non mi. Donec faucibus euismod enim at rhoncus. In vehicula sodales egestas. Aenean lobortis, erat eu condimentum iaculis, nunc odio molestie turpis, ut tristique mi arcu et metus. Morbi facilisis risus ut euismod finibus. 
      </p>
        <form>
        <div class="form-group">
        <div class="row">
          <div class="col-sm-6 form-group">
            <input class="form-control" id="Name" name="Nombre" placeholder="Nombre" type="text" required>
          </div>
          <div class="col-sm-6 form-group">
            <input class="form-control" id="Email" name="Empresa" placeholder="Empresa" type="text" required>
          </div>
        </div>
       
        <div class="row">
          <div class="col-sm-6 form-group">
            <input class="form-control" id="Nombre" name="Telefono" placeholder="Telefono" type="text" required>
          </div>
          <div class="col-sm-6 form-group">
            <input class="form-control" id="Email" name="Email" placeholder="Email" type="email" required>
          </div>
        </div>

            <label class="control-label">Imagen de la pieza:</label>
            <input id="input-1" type="file" class="file">
            <br/>
            <label for="comment">Descripción:</label>
            <textarea class="form-control" rows="5" id="comment"></textarea>
        </div>
        <button type="submit" class="btn btn-default">Enviar</button>
        </form>  
    </div>
  </div>

    </body>

<?php
include_once('../elements/footer.php');
?>