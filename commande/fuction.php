<?php
function add_p($Nom_P,$Prix_P,$Description_P,$Image_P,$Couleur,$available ){
    if(require("../connexion/connexion.php")){
        $A =$conn->prepare("INSERT INTO produits (Nom_P,Prix_P,Description_P,Image_P,Couleur,available) VALUES (?, ?, ?, ?,?,?)");
    $A->execute(array($Nom_P,$Prix_P,$Description_P,$Image_P,$Couleur,$available ));
    $A->closeCursor();
    }


}
function affiche(){
    if(require("../connexion/connexion.php")){
        $A =$conn->prepare("SELECT * FROM produits ");
        $A->execute();
        $data =$A->fetchAll(PDO::FETCH_OBJ);
        return $data;

        $A->closeCursor();

}
}
function delete($id_P){
    if(require("../connexion/connexion.php")){
        $A =$conn->prepare("DELETE  FROM produits WHERE id_P=?");
        $A->execute(array($id_P));
     
        $A->closeCursor();
    }

}
function getAdmin($login, $password){
  
    if(require("../connexion/connexion.php")){
  
      $A = $conn->prepare("SELECT * FROM admin WHERE ID_A=? AND mdp_A=?");
  
      $A->execute(array($login,$password));
  
      if($A->rowCount() == 1){
        
        $data = $A->fetchAll(PDO::FETCH_OBJ);
  
      
return $data;

  
      }else return false;
  
    }
    $A->closeCursor();
  
  }
  function update($Nom_P,$Prix_P,$Description_P,$Image_P,$id_P,$Couleur,$available)
{
  if(require("../connexion/connexion.php"))
  {
    $A = $conn->prepare("UPDATE produits SET `Nom_P` = ?, Prix_P = ?, Description_P = ?, `Image_P` = ? ,`Couleur` = ?,
    `available` = ?  WHERE Id_P=?");

    $A->execute(array( $Nom_P, $Prix_P, $Description_P, $Image_P,$id_P));

    $A->closeCursor();
  }
}
function afficherUnProduit($id_P)
{
	if(require("../connexion/connexion.php"))
	{
		$A=$conn->prepare("SELECT * FROM produits WHERE Id_P=?");

        $A->execute(array($id_P));

        $data = $A->fetchAll(PDO::FETCH_OBJ);

        return $data;

        $A->closeCursor();
	}
}



function seconnecter($login, $password){
  
  if(require("../connexion/connexion.php")){

    $A = $conn->prepare("SELECT * FROM clients WHERE Email_C=? AND Mdp_C=?");

    $A->execute(array($login,$password));

    if($A->rowCount() == 1 ){
      
      $data = $A->fetchAll(PDO::FETCH_OBJ);

    
return $data;


    }else return false;

  }
  $A->closeCursor();

}
 
  function ajouterP($id_P){
     if(require("../connexion/connexion.php")){
    $A=$conn->prepare("SELECT * FROM produits WHERE Id_P IN (".implode(',', $id_P).")");
                                      $A->execute();
                                      $data=$A->fetchAll(PDO::FETCH_OBJ);
                                      return $data;
                                     

       

                                
     }
  }
  function Commande($date,$prix_f,$id_P,$id_c){

 if(require("../connexion/connexion.php")){
    $A=$conn->prepare("INSERT INTO commande ( `dateco`, prix_f, `ID_P`, `ID_C`)  VALUES(?,?,?,?)");
    $A->execute(array($date,$prix_f,$id_P,$id_c));

       $A->closeCursor();
                                   

       

                                
     }

  }
  function afficheC(){
    if(require("../connexion/connexion.php")){
$A=$conn->prepare("SELECT * FROM clients");
$A->execute(array());
$data=$A->fetchAll(PDO ::FETCH_OBJ);
return $data;

    }

  }
  function deleteC($id_C){
    if(require("../connexion/connexion.php")){
        $A =$conn->prepare("DELETE  FROM clients WHERE Id_C=?");
        $A->execute(array($id_C));
     
        $A->closeCursor();
    }

}
function affC(){
      if(require("../connexion/connexion.php")){
$A=$conn->prepare("SELECT * FROM commande");
$A->execute(array());
$data=$A->fetchAll(PDO ::FETCH_OBJ);
return $data;

    }

}
  function deleteCo($id_Co){
    if(require("../connexion/connexion.php")){
        $A =$conn->prepare("DELETE  FROM commande WHERE ID_CO=?");
        $A->execute(array($id_Co));
     
        $A->closeCursor();
    }

}

?>
