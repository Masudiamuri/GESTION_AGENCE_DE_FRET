<?php
$server ="localhost";
$username ="root";
$password = "";
$database = "GESTION DE FRET AERIEN";
$connexion= mysqli_connect("$server","$username","$password");
$select_db= mysqli_select_db($connexion,$database);
if(!$select_db)
{
    echo("connexion reussit");
} 
?>