<?php
$id_P=$_GET['pdt'];
include_once("../commande/fuction.php");
$req = deleteCo($id_P);  
   
    header("Location: Commandes.php");
?>