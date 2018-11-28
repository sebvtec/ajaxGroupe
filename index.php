<?php

//session_start();

require_once 'vendor/autoload.php';

$loader = new Twig_Loader_Filesystem('views');

$loader = new Twig_Loader_Array();

//$twig->addGlobal('session', $_SESSION);

$twig = new Twig_Environment($loader);

$template= $twig->loadTemplate('view.twig.html');

echo $twig->render($template, array(
    'name' => 'Fabien'
));




// Incluez le fichier de configuration de la base de données 
include  'connexion.php' ; 

// Récupère toutes les données du pays 
$query  =  $db -> query ( "SELECT * FROM continents ORDER BY id ASC" ); 

// Compte le nombre total de lignes 
$rowCount  =  $query -> num_rows ; 
?> 


<form method="POST" action="">
	<input type="text" placeholder="Nom" name="Nom" id="Nom">
	<span id="errorNom" class="tooltip">Un nom ne peut pas faire moins de 2 caractères</span>


	<input type="text" placeholder="Prenom" name="Prenom" id="Prenom">
	<span id="errorPrenom"  class="tooltip">Un prénom ne peut pas faire moins de 2 caractères</span>



	    <p>Votre continent</p>
	<select id="SelectContinant">
		<?php
 if ( $rowCount  >  0 ) { 
        while ( $row  =  $query -> fetch_assoc ()) {  
            echo  '<option value = "' . row [ 'continents_id' ]. '">' . $row [ 'continents_lib' ]. '</ option>' ; 
        } 
    } else { 
        echo  '<option value = ""> Pays non disponible </ option> ' ; 
    } 
?>
	</select>


	    <p>Votre pays</p>
	<select id="SelectPays">

	</select>


	    <p>Votre ville</p>
	<select id="SelectVille">

	</select>
</form>