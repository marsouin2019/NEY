<?php

// definir les constantes de connexion
define("SERVEUR", "localhost");
define("USER", "vitulin");
define("PASSWORD", "clickdoc");
define("DATABASE", "clickdoc");

// connexion database
$mysqli = mysqli_connect(SERVEUR, USER, PASSWORD, DATABASE);

// verification connexion brut
print_r($mysqli);