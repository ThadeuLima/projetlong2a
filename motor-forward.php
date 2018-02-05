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
	   
           $speed_m1 = $_GET['speed'];
           $speed_m2 = $speed_m1;
           $speed_m1 = escapeshellarg($speed_m1);
           $speed_m2 = escapeshellarg($speed_m2);
           $command = "nohup sudo python /var/www/html/projetlong2a/commandes-moteur/vitesse.py ".$speed_m1." ".$speed_m2;
           $output = shell_exec($command);
	   echo "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa", $speed_m1, $speed_m2	
           
	 ?>

    </body>
</html>
