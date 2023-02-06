<?php
require'../connexion/connexion.php';
if(!isset($_SESSION)){
	session_start();
}

if(!isset($_SESSION['panier1'])){
	$_SESSION['panier1']=array();
}
if(isset($_GET['id'])){
	$Id_P=$_GET['id'];
	$A=$conn->prepare("SELECT * FROM produits WHERE Id_P = $Id_P");
	$A->execute();
	$data=$A->fetchAll(PDO::FETCH_OBJ);
	
	
	
	
}else{
	die("none");
}
if(isset($_SESSION['panier1'][$Id_P])){
        $_SESSION['panier1'][$Id_P]++; 
    }else {
        
        $_SESSION['panier1'][$Id_P]= 1 ;
    }
echo "<script> window.location.href='panier.php'</script>";


?>