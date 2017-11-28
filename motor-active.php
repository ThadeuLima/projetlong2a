<html>

    <head>
        <meta charset='utf-8' />
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' href='style.css'>
        <link rel='stylesheet' href='normalize.css'>
    </head>
     
    <body>
        <header class='hero'>
            <p class='logo'>Projet 2A Supélec</p>
        </header>

        <div class='sidenav'>
            <a href='index.html'>Home</a>
        </div>

        <?php

                if(isset($_GET['speed'])){
                    $speed = $_GET['speed'];
                    $result = exec("sudo /home/pi/433Utils/RPi_utils/codesend $speed");
                    echo $result;
                }
        ?>

    </body>
</html>