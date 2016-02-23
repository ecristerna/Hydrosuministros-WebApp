<?php
$PageTitle="Bombas";
include_once('elements/header.php');
?>
    <body>

    <div class="container-fluid">

        <div class="col-md-12">
            <h2>Servicios de Reparación</h2>
            <hr></hr>
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

    <body>

<?php
include_once('elements/footer.php');
?>