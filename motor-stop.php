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

           $output =  exec("sudo -u www-data python /home/pi/commandes-moteur/teste.py");
           echo $output;
                
        ?>

    </body>
</html>
