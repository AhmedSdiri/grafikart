<?php
require( 'includes.php' );
define('WEBROOT' ,dirname(__FILE__));
echo WEBROOT.' = WEBROOT<br/>';
define('ROOT',dirname(__WEBROOT__));
echo ROOT;
define('DS',DIRECTORY_SEPARATOR);
echo DS.' = DS <br/>';
define('CORE', dirname(dirname($_SERVER['SCRIPT_NAME'])));
echo CORE.' = CORE<br/>';
?>

    <pre>
<?php print_r($_SERVER); ?>
</pre>

    <?php 
  
new Dispatcher();

?>
    <html>

    <head>
    </head>

    <body>
        <div class="hero-unit">
            <h1>Bienvenue</h1>
            <p>c'est la page d'accueil</p>
        </div>
    </body>

    </html>
