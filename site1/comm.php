  
<?php
session_start();
include_once"../connexion/connexion.php";
require"../commande/fuction.php";
 $id= array_keys($_SESSION['panier1']);
 $Prd =ajouterP($id);
 $idc =$_SESSION['Id_C'];
	$panier =$_SESSION['panier1'];
	$date =date('y-m-d');
if(isset($_POST['valider'])) {
$total=0;
	foreach($Prd as $A){
	
	$qty =[$_POST['qty']];
	$Id_P=$A->Id_P;
	$quant=implode(" ", $qty);
	$prix=$A->Prix_P;
	$total+=$prix;
	
	$x=Commande($date,$prix,$Id_P,$idc);
	echo "<script>window.location.href='pageproduit.php'</script>";

}
	
	


}
?>