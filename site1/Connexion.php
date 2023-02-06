
<!DOCTYPE html>

<?php
require "../commande/fuction.php";
if(isset($_GET['valid'])){

    echo " <script> alert(' vous etes inscrits')</script>";
}



?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel = "preconnect" href = "https://fonts.gstatic.com">
  <link rel="preconnect" href="https://fonts.gstatic.com">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="style9\style9.css"/>
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
    
    <div class="login-form">
    
        
 <form method="post" action="conn.php" >
 <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
    <h2 align="center">Se Connecter</h2>
     <div class="separation"></div>
     <div class="corps-form">
   <div class="boite">
    <label for="">Email</label>
    <input type="email" name="Email_C"  placeholder="entrez votre mail" required>
    <i class="fa-solid fa-envelope"></i>
   </div>
   <div class="boite">
   <label for="">Mot de passe</label>
   <input type="password"name="Mdp_C"  placeholder="entrez votre mot de passe" required>
   <i class="fa-solid fa-lock"></i>
   </div>
 </div>
   <div class="peid-formulaire1" style ="display: flex;
justify-content: space-around;" align="center">
  <button   type="submit" name="seconnecter"  class="btn btn-second" style="  margin-top: 10px;
  font-size: 15px;
  color: white;
  background-color: black;
  border: none;
  padding:  15px 20px;
  outline: none;
  cursor: pointer;
  border-radius: 10px;
  transition: transform 0.5s;
  font-family: Andale Mono, monospace;">se connecter </button>
 
    <button  name="valider"  class="btn btn-second" style="  margin-top: 10px;
  font-size: 15px;
  color: white;
  background-color: black;
  border: none;
  padding:  15px 20px;
  outline: none;
  cursor: pointer;
  border-radius: 10px;
  transition: transform 0.5s;
  font-family: Andale Mono, monospace;"><a href="registre.php" style="text-decoration: none ; color:rgb(169,235,16);" >Inscriez-vous</a> </button>
  </div>
  <div class="exist" align="center">
   <a href=""  style="margin: 0;
padding: 0;">Mot de passe oublie</a>
</div>

</form>




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
</body>
</html>
