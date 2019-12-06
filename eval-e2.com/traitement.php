
<?php
session_start();

include("class/cl_traitement.php");
include("class/connect.php");

$addPersonne = new Personne($mysqli); //pour ajouter une personne


// condition

switch($_POST["frmForm"])
{
    case "Register";
    //appel methode add personne
    $addPersonne->add_personne($_POST);
    break;
    case "Login";
    //appel methode login
    $addPersonne->login($_POST);
    break;
    
};





