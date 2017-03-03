<?php

if (isset($_POST['contacts']) && $_POST['contacts'] == 'submit') {
    if((isset($_POST['name']) && !empty($_POST['name'])) && (isset($_POST['sujet']) && !empty($_POST['sujet'])) && (isset($_POST['email']) && !empty($_POST['email'])) && (isset($_POST['message']) && !empty($_POST['message'])))
        

    {
        $to      = 'blood.access@gmail.com';
        $message = $_POST['name']. " - " . $_POST['email']. " - ". $_POST['message'];
        mail($to, $_POST['sujet'], $message);
    }
    

}

	//try
    //{
    //    $bdd = new PDO('mysql:host=127.0.0.1;dbname=portefolio;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    //}
    //catch (Exception $e)
    //{
    //    die('<erreur>Connexion impossible à la base de données <br> Merci de réessayer dans quelque temps <br> Erreur: </erreur>' . $e->getMessage());
    //}
?>

<?php
$cas =(!isset($_REQUEST['cas'])) ? 'accueil' : $_REQUEST['cas'];

include "configs/chemins.class.php";

require Chemins::VUES_PERMANENTE."head.inc.php";
    switch ($cas) {
        case 'accueil': {
            require chemins::VUES . 'accueil.php';
            break;
        }
        case 'projet' : {
            require Chemins::VUES . 'projets.php';
            break;
        }
        case 'msg': {
            require Chemins::VUES . 'msgInst.php';
            break;
        }
        case 'inscription': {
            require Chemins::VUES . 'inscription.php';
            break;
        }
    }

require Chemins::VUES_PERMANENTE."footer.inc.php";
?>

