
<?php 
session_start(); 
include "../commande/index.php";


if (isset($_POST['Email_C']) && isset($_POST['Mdp_C'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$Email_C = validate($_POST['Email_C']);
	$Mdp_C = validate($_POST['Mdp_C']);

	if (empty($Email_C)) {
		header("Location: Connexion.php?error=Email is required");
	    exit();
	}else if(empty($Mdp_C)){
        header("Location: Connexion.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM clients WHERE Email_C='$Email_C' AND Mdp_C='$Mdp_C'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['Email_C'] === $Email_C && $row['Mdp_C'] === $Mdp_C) {
            	$_SESSION['Email_C'] = $row['Email_C'];
            	$_SESSION['Mdp_C'] = $row['Mdp_C'];
            	$_SESSION['Id_C'] = $row['Id_C'];
             echo "<script>window.location.href='panier.php'</script>";
		      
            }else{
				header("Location: Connexion.php?error=Incorect User name or password");
		        exit();
			}
		}else{
			header("Location: Connexion.php?error= or password");
	        exit();
		}
	}
	
}else{
	echo "<script>window.location.href='Connexion.php'</script>";
	exit();
}
