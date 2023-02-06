
<!DOCTYPE html>
<html lang="en">
<head>
    <?php


    require("../commande/fuction.php");

  
$Produits=affiche();



?>

   

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="test/style.css">
    <link rel = "preconnect" href = "https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    *{
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
    font-family: 'poppins', sans-serif;
    scroll-behavior: smooth;
}

p{
    font-weight: 300;
    color: #111;
}

header{
    position: fixed;
    top: 0%;
    left: 0%;
    padding: 20px 10px;
    width: 100%;
    z-index: 1;
    display: flex;
    justify-content: space-evenly;
    align-items: center;
    transition: 0.5s;
    background-color: white;
}
.logo{
    color: rgb(49, 45, 45);
    font-weight: bold;
    font-size: 2em;
    text-decoration: none;
}
.logo span{
    color: rgb(169,235,16);
}

.navbar{
    display: flex;
    position: relative;
}
.navbar li{
    list-style: none;
}
.navbar a{
    color: rgb(48, 48, 48);
    text-decoration: none;
    margin-left: 30px;
    font-weight: 700;
}
.navbar li .dropdown {
   
    position: absolute;
    padding: 25px 0px ;
    background-color: #fff;

    width: 35%;
   z-index: 1;
    align-content: center;
    margin-top: 10px;
    display: none;
    
}
.navbar li .dropdown li {
    margin: 10px 0 20px;

  
   
    text-decoration: none;
}
.navbar li .dropdown li a{
     color:#333;
     border-bottom : 1px solid  rgb(169,235,16);
     width: 100%;
     padding-bottom: 10px;
   
}
.navbar li:hover .dropdown{
    display: block;
} 

.btn-reserve{
    padding: 10px 20px;
    background:rgb(169,235,16);
   margin-top: -10px;
   text-transform:uppercase ;
}

.btn-reserve:hover{
    background: rgb(169,235,16);
    transition: ease-out;
}

header .navbar li a:hover{
    color: rgb(169,235,16);
    border-bottom: 2px solid rgb(169,235,16);
}
header.sticky{
    background: #fff;
    padding: 10px 10px;
    box-shadow: 0px 5px 20px rgba(0,0,0, 0.05);
}

header.sticky .logo{
    color: #000;
}

header.sticky .navbar li a {
    color: #000;
}
header.sticky .navbar li .dropdown li a{
    color: rgb(169,235,16);
}

header.sticky li a:hover{
    color: rgb(169,235,16);
    border-bottom: 2px solid rgb(169,235,16);
}

.banniere{
    position: relative;
    width: 100%;
    min-height: 50vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background-image: url("https://webinars.goshopmatic.com/file/2020/09/shutterstock_725359933.jpg");
    background-size: cover;
}
.banniere  img{
width: 1000px;
  text-align: center;
}

.banniere .contenu{
    max-width: 70%;
    text-align: center;
}
.banniere .contenu h2{
    color:rgb(169,235,16);
    font-size: 3em;
    text-transform: capitalize;
}
.contenu p{
    color: #ffff;
    font-size: 15px;
}


section{
    padding: 100px;
}
.main{
    background-color: rgb(226, 226, 226);
    padding: 20px; /* spacage pour les element a l'interieur*/
    margin-top: 20px; /* ajouter un space en haut de main */
}

/* style de la liste des produits */
.card-list{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;

}

/* style de la card sur produit*/
.card1{
    background-color: white;
    margin-bottom: 10px;
    box-shadow: 30px 30px 30px 30px rgb(204, 204, 204);
    height: 30%;
    width:30%;
}

/* style de l'iamge du produit */
.produit-img {
    height: 250px;
    width: 100%;
}

/* titre du produit */
.card-body .card-title {
    padding-left: 5px;
    padding-right: 5px;
}

/* deszcription du produit */
.card-body .desc{
    font-size: 10px;
    padding-left: 5px;
    padding-right: 5px;
}

/* style du prix du produit */

.card-body .price{
    font-size: 19px;
    font-weight: bold;
    text-align: right;
    padding-right: 10px;
    padding-bottom: 5px;
    color: rgb(169,235,16);
}

/* style du bouton d'achat */
.card-body .buy-btn a{
  
    font-weight: bold;
    padding: 5px;
    color: white;
}
.buy-btn {
    background-color: rgb(169,235,16);
      text-align: center;
      padding :10px 0;
 }

</style>
    <title>Accessories</title>
<link rel="stylesheet" href="produit/produit.css">
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
</header>>
<section class="banniere" id="banniere">
    <div class="contenu">
        <h2> Accessoires <h2>
        <p>Les smartphones de nos jours sont plus que de simples outils destinés à passer et à recevoir des appels. Vous pouvez désormais, tout faire ou presque, grâce à votre téléphone intelligent. Les fabricants d’accessoires l’ont bien compris, et ne cessent d’inonder le marché d’articles conçus pour pousser les fonctionnalités des smartphones au-delà de leurs possibilités. En voici quelques-uns qui sauront se révéler utiles au quotidien.</p>

    </div>
</section>
<section class="main">

        <!-- Liste de tous les produits -->
        <div class="card-list">
<?php

if(empty($Produits)){
    $Produits=array();
}
foreach($Produits as $produits):
?>
            <!-- Produit  1-->
            <div class="card1" >
            <img class="produit-img" src="../produits/<?=$produits->Image_P?>">

              <div class="card-body">
                  <div class="card-title">
                      <h3>
                      <?= $produits->Nom_P?>
                      </h3>
                  </div>

                  <div class="desc">
                      <p> <?= $produits->Description_P?></p>
                  </div>
                  <div class="price">
                      <?= $produits->Prix_P?>
                      <em style="color: black; font-weight: 300;">
                          $
                      </em>
                  </div>


                                     <div class="buy-btn">
                         <a href="Page2.php?id=<?php echo $produits->Id_P ;?>">Add to Cart</a>
                                     </div>
              </div>
          </div>
       
              
<?php endforeach;?>
</section>
</body>

</html>