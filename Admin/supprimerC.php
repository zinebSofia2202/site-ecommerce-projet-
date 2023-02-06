<?php
$id_P=$_GET['pdt'];
include_once("../commande/fuction.php");
$req = deleteC($id_P);  
   
    header("Location: Clients.php");
?>