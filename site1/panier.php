
<!DOCTYPE html>

<?php


session_start();
include_once"../connexion/connexion.php";
require"../commande/fuction.php";
 if(empty($_SESSION['Email_C']) && empty($_SESSION['Id_C']) && empty($_SESSION['Mdp_C'])){

  echo "<script>window.location.href='Connexion.php'</script>";
 }


 //récupération de l'id dans le lien
 if(isset($_GET['id'])){//si un id a été envoyé alors :
    $Id_P = $_GET['id'] ;
    $pro =afficherUnProduit($Id_P);
 }
if(isset($_GET['del'])){
    $id_del = $_GET['del'] ;
    //suppression
    unset($_SESSION['panier1'][$id_del]);
   }
   
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile Shopee</title>

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Owl-carousel CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />

    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <!-- Custom CSS file -->
    <link rel="stylesheet" href="style.css">
    
</head>
<body>

  <!-- start #header -->
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
        
        <a href="panier.php" class="btn-reserve"onclick="toggleMenu();> aria-hidden="true"></i>
Panier</a>
    </ul>
</header>

     <!-- !start #header -->
     <script type="text/javascript">
     window.addEventListener('scroll', function(){
         const header =document.querySelector('header');
         header.classList.toggle("sticky", window.scrollY > 0 );
     });

     function toggleMenu(){
         const tmenuToggle = document.querySelector('.menuToggle');
         const navbar = document.querySelector('.navbar');
         navbar.classList.toggle('active');
         menuToggle.classList.toggle('active');
     }
 </script>
<form method="post" action="comm.php">
    <!-- start #main-site -->    
        <main id="main-site">

      
                                   
          <!-- Shopping cart section  -->
              <section id="cart" class="py-3">

                  <div class="container-fluid w-75">
                      <h5 class="font-baloo font-size-20">Shopping Cart</h5>
  
                      <!--  shopping cart items   -->
                          <div class="row">
                              <div class="col-sm-9">
                                 <?php

                                 $total=0;
                                     $id= array_keys($_SESSION['panier1']);
                                     
                                    
                                     
                                   if(empty($id)){
                                   $Prd= array();
                                 }
                                    else{
                                        
                                    $Prd =ajouterP($id);
                                  }
                

                                      foreach($Prd as $prod):
$total+=$prod->Prix_P;


                                              ?>

                                    
                                  <!-- cart item -->
                                <div class="row border-top py-3 mt-3">
                                          <div class="col-sm-2">
                                              <img src="../produits/<?= $prod->Image_P?>" style="height: 120px;margin-top: 80px;" alt="cart1" class="img-fluid" >    <!-- photo de 1er item-->
                                          </div>
                                          <div class="col-sm-8">
                                              <h5 class="font-baloo font-size-20"><?= $prod->Nom_P?></h5>  <!-- 1er item dans panier -->
                                              <small>by Samsung</small>
                                              <!-- product rating -->
                                            <div class="d-flex">  <!--rating stars -->
                                                  <div class="rating text-warning font-size-12">
                                                      <span><i class="fas fa-star"></i></span>
                                                      <span><i class="fas fa-star"></i></span>
                                                      <span><i class="fas fa-star"></i></span>
                                                      <span><i class="fas fa-star"></i></span>
                                                      <span><i class="far fa-star"></i></span>
                                                    </div>
                                                    <a href="#" class="px-2 font-rale font-size-14">20,534 ratings</a>
                                              </div>
                                              <!--  !product rating-->

                                              <!-- product qty -->
                                       
                                              
                                              <div class="qty d-flex pt-2">
                                                  <div class="d-flex font-rale w-25">
                                                    
                                                      <input type="hidden" name="id" value="<?=$prod->Id_P?>">
                                                      <input type="number"  min ="0" data-id="pro1" class="qty_input border px-2 w-100 bg-light"  value="1" placeholder="1" id="quantite" name="qty" max="20">
                                                     
                                                  </div>
                                                  <button type="submit" class="btn font-baloo text-danger px-3 border-right"><a href="panier.php?del=<?=$prod->Id_P?>"> supprimer</a></button>
                                              </div>
                                                  <script src="java.js" async>

</script>
                                              <!-- !product qty -->

                                          </div>

                                          <div class="col-sm-2 text-right">
                                              <div class="font-size-20 text-danger font-baloo">
                                                  $<span class="product_price" id="price"><?=$prod->Prix_P?></span>
                                              </div>
                                          </div>
                                      </div>
                                      <?php
                                    endforeach ;

                                      ?>

                                
                                  <!-- !cart item -->
                     
                              </div>
                              <!-- subtotal section-->
                              <div class="col-sm-3">

                      
                                  <div class="sub-total border text-center mt-2">
                                      <h6 class="font-size-12 font-rale text-success py-3"><i class="fas fa-check"></i> Your order is eligible for FREE Delivery.</h6>
                                      <div class="border-top py-4">
                                          <h5  class="font-baloo font-size-20 ">Subtotal:&nbsp; <span class="text-danger deal-price" ><span class="text-danger total deal-price" id="deal-price"></br></span><?= $total?> </span> </h5>
                                          <button name="valider" type="submit" class="btn btn-warning mt-3">
                                            <style="text-decoration:none;color: #212529;">Proceed to Buy</button>
                                      </div>
                                  </div>
                              </div>
                           
                              <!-- !subtotal section-->
                          </div>
                      <!--  !shopping cart items   -->
                  </div>
              </section>
          <!-- !Shopping cart section  -->
          <!-- new phones-->
         
</form>
        </main>
    <!-- !start #main-site -->



    <!-- start #footer -->
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

     <!-- !start #footer -->


    
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!-- Owl Carousel Js file -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha256-pTxD+DSzIwmwhOqTFN+DB+nHjO4iAsbgfyFq5K5bcE0=" crossorigin="anonymous"></script>

    <!--  isotope plugin cdn  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha256-CBrpuqrMhXwcLLUd5tvQ4euBHCdh7wGlDfNz8vbu/iI=" crossorigin="anonymous"></script>

    <!-- Custom Javascript -->

</body>
</html>
