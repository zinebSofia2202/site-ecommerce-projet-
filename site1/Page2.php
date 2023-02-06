
<?php
session_start();
require("../commande/fuction.php");
$id_P=$_GET['id'];
$Produits =afficherUnProduit($id_P);
 if(empty($id_P)){
                                   $Produits= array();
                                 }
foreach($Produits as $produits){
  $Nom_P=$produits->Nom_P;
  $Prix_P=$produits->Prix_P;
  $Image_P=$produits->Image_P;
  $Description_P=$produits->Description_P;
  $id_P=$produits->Id_P;
  $Prix_PF=$produits->prix_PF;
  $Couleur =$produits->Couleur;
  $Shipping = $produits-> Shipping ;
  $available=$produits-> available;


}
?>
<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Product Card/Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="description1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>

   <header>
    <a href="#" class="logo"><span>A</span>ccessories</a>
    <div class="menuToggle" onclick="toggleMenu();"></div>
    <ul class="navbar">
        <li><a href="pageacceuil.php" onclick="toggleMenu();">Accueil</a></li>
        <li><a href="pageproduit.php" onclick="toggleMenu();">Produits</a></li>
        <li><a href="#apropos" onclick="toggleMenu();">A propos de nous</a></li>
        <li><a href="#menu" onclick="toggleMenu();">Menu</a></li>
        <li><a href="#expert" onclick="toggleMenu();">Offres</a></li>
        <li><a href="#temoignage" onclick="toggleMenu();">Temoignage</a></li>
        
        <a href="panier.php" class="btn-reserve"onclick="toggleMenu();"><i class="fa fa-cart-plus"  style="font-size:16px ; margin-right: 7px;" aria-hidden="true"></i>
Panier</a>
    </ul>
</header>

    <div class="card1" style="padding-top: 150px;" >
   <img class="produit-img" src="../produits/<?= $Image_P?>"   style="width: 400px;padding-left: 50px;"> </div>
   <div class="top" style=" margin-top: -380px;">
   <div class="smart">
<h1 > <?= $Nom_P?> </h1> <hr></div>
<div class="price">
  
</div>
<div class="price1">
  <p>New price:</p>  <h5> <?= $Prix_P?>
    <em style="color: black; font-weight: 400;">
        $
    </em>   </h5>

</div>
<div class="item">
  <h1>About this item :<h1>
    <p><?= $Description_P?></p>
</div>
<div class="dispo" style="margin-top: -10px;">
  <ul>
    <li>color :<span><?= $Couleur?></span></li>
    <li>available :<span><?= $available?></span></li>
    <li>category :<span>Accessoire</span></li>
    <li>Shipping Area :<span>All over the world</span></li>
    <li>Shipping Free : <span><?= $Shipping?></span></li>
  </ul>
  </div>
  <div class="purchase">
  <center>  <button type="button"  class="btn"><a href="ajouterp.php?id=<?= $produits->Id_P?>" style="text-decoration: none ; color:white;">Add to cart</a> &nbsp<img src="https://cdn-icons-png.flaticon.com/512/126/126083.png"><i class=""></i></button>
      <button type="button" class="btn">Compare</button></center>
</div>
  </div>
  <footer>
        <div class="footer">
        <div class="aboutus">
            <h1>A propos</h1>
            <p class="p"> <span>Med</span>Ben est une plateforme de vente des Accessoires electroniques depuis mars 2020 en collaboration avec des grands brands du monde </p>
            <ul>
                <li>
                    Apple</li>
                <li>Samsung</li>
                <li>Xiaomi</li>
                <li>Infinix</li>
                
            </ul>
            <p class="adresse"> <i class="fa fa-map-marker" aria-hidden="true"></i>
                Adresse : Hay idaa Lot Azrak rue 10 Nr 61 Ainchok CASA </p>
        </div>
            <div class="cont">
                <h1>Pour Nous Contacter</h1>
                
                <p> <i class="fa fa-facebook" aria-hidden="true"></i>
                    MedBen Accessoires</p>
                    <p> <i class="fa fa-instagram" aria-hidden="true"></i>
    
                        MedBen Accessoires</p>
                        <p> <i class="fa fa-whatsapp" aria-hidden="true"></i>
    
                            0646148794</p>
                            <p> <i class="fa fa-envelope" aria-hidden="true"></i>
                            Email:bennani.fst@uhp.ac.ma</p>
            </div>
            
        </div>
        <p class="copy">  &#169;Copyright 2022 www.MedBen.com .All right reserved</p>
    </footer>

  </body>
  <?php
  if(isset($_GET['Id_P'])){
    
    if(!empty($_GET['Id_P']) OR is_numeric($_GET['Id_P']))
    {
        $id_P = $_GET['Id_P'];
    }

                                  
}
?>

</html>