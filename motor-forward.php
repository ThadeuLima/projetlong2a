z<html>

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
                    $speed_m1 = $_GET['speed'];
                    $speed_m2 = $speed_m1;
                    $speed_m1 = escapeshellarg($speed_m1);
                    $speed_m2 = escapeshellarg($speed_m2);
                    $speed_m1 = $speed_m1*78/100+127;
                    $speed_m2 = $speed_m2*78/100+127;
                    $result = exec("sudo python /home/pi/commandes-moteur vitesse.py $speed_m1 $speed_m2");
                    echo $result;
                    exit();
                }
        ?>

    </body>
</html>