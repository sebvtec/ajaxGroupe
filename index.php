<?php

require('models/model.php');

$continents = getContinent();




require_once 'vendor/autoload.php';



$loader = new Twig_Loader_Array();

//$twig->addGlobal('session', $_SESSION);

$loader = new Twig_Loader_Filesystem('view');
$twig = new Twig_Environment($loader);

echo $twig->render('view.twig.html', array(
	'continents' => $continents
));