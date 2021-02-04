<?php
error_reporting( E_ALL );
ini_set( 'display_errors', 1 );

require_once "lib/autoload.php";

PrintHead();
PrintJumbo();
?>

<div class="container">
    <div class="row">

        <?php

        if ( ! is_numeric( $_GET['img_id']) ) die("Ongeldig argument " . $_GET['img_id'] . " opgegeven");

        $city = new City($id = $_GET['img_id']);
        //get template
        $template = file_get_contents("templates/column_full.html");
        /*$output = str_replace();
        print $output;*/

        ?>

    </div>
</div>

</body>
</html>