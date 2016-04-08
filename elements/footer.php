<footer>
    <nav id="footer" class="navbar navbar-default navbar-fixed-bottom">
        <div class="container">
            <p class="navbar-text">Hydrosuministros Inteligentes S.A. de C.V.</p>
            <p class="navbar-text">Número de visitas:
<?php
            //Obtained from: http://hibbard.eu/how-to-make-a-simple-visitor-counter-using-php/
            $counter_name = "counter.txt";
            // Check if a text file exists. If not create one and initialize it to zero.
            if (!file_exists($counter_name)) {
                $f = fopen($counter_name, "w");
                fwrite($f,"0");
                fclose($f);
            }
            // Read the current value of our counter file
            $f = fopen($counter_name,"r");
            $counterVal = fread($f, filesize($counter_name));
            fclose($f);
            // Has visitor been counted in this session?
            // If not, increase counter value by one
            if(!isset($_SESSION['hasVisited'])){
                $_SESSION['hasVisited']="yes";
                $counterVal++;
                $f = fopen($counter_name, "w");
                fwrite($f, $counterVal);
                fclose($f);
            }
            echo $counterVal;
            ?>
            </p>
            <p class="navbar-text navbar-right">Tel: (81) 1234 2678&nbsp;&nbsp;&nbsp;&nbsp;Correo: ventas@hydrosumint.mx</p>
        </div>
    </nav>
</footer>
