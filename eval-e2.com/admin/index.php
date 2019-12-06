<?php
    session_start();

    if($_SESSION["prenom"] == "")

    {
        header('Location : http://localhost/eval-e2.com/login.php' );
    }else{
         $nomPage = "Admin";
    include("includes/header.php");  
    include("includes/content.php");
    include("includes/footer.php"); 
    };
   
?>