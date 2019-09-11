<?php
//traitement du formulaire register
//print_r($_POST);

//var_dump($_POST["frmPrenom"]);

                       //pour cripter utiliser

//print_r( password_hash($_POST["frmPass"],PASSWORD_DEFAULT));
             
                    //ou utiliser salt pour cripter

$salt = "stargyal";

$salt = md5($salt);

echo md5($salt.$_POST["frmPass"]);

              //ou au lieu de md5
/*
echo sha1($salt.$_POST["frmPass"]);

echo md5($md5.$_POST["frmPass"]);

echo sha1($md5.$_POST["frmPass"]);
*/

/*foreach($_POST as $key => $value)

{
   echo $key. "valeur". strip_tags($value). "<br />";


    if(strlen(htmlentities(strip_tags($value))) < 25)
    {
        echo "$key valeur".htmlentities(strip_tags($value))."<br />";
    }else{
        echo "la chaîne correspondant à $key, n'est pas valide <br />";
    }
}*/




 
  
