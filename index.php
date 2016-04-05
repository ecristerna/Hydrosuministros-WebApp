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
            <h1>Hydrosuministros Inteligentes SA de CV</h1>
            <hr>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris porttitor orci dui, a eleifend metus consectetur nec. Nullam purus elit, malesuada sed sagittis sit amet, mollis sed justo. Morbi ante lectus, pretium vel accumsan ut, lobortis non mi. Donec faucibus euismod enim at rhoncus. In vehicula sodales egestas. Aenean lobortis, erat eu condimentum iaculis, nunc odio molestie turpis, ut tristique mi arcu et metus. Morbi facilisis risus ut euismod finibus. Fusce facilisis felis in orci dictum, id malesuada nulla facilisis. Etiam dolor purus, ultrices ac rutrum nec, condimentum blandit magna. Integer non convallis nibh. Maecenas molestie ligula non dui efficitur, nec lobortis orci faucibus. Nullam maximus nulla quam. Pellentesque a facilisis sapien. Nam at massa diam.
            </p>
        </div>
    </div>

    </body>

<?php
include_once('elements/footer.php');
?>
