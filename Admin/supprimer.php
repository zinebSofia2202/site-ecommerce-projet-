<?php
$id_P=$_GET['pdt'];
include_once("../commande/fuction.php");
$req = delete($id_P);  
   
    header("Location: produits.php");
?>