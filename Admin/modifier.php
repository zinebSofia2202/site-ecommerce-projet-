<?php
require("../commande/fuction.php");
session_start();

if(!isset($_SESSION['SITD1234']))
{
    header("Location: log.php");
}

if(empty($_SESSION['SITD1234']))
{
    header("Location: log.php");
}


$id_P=$_GET['pdt'];
$Produits =afficherUnProduit($id_P);



 foreach($Produits as $produits){
    $Nom_P=$produits->Nom_P;
    $Prix_P=$produits->Prix_P;
    $Image_P=$produits->Image_P;
    $Description_P=$produits->Description_P;
    $id_P=$produits->Id_P;
    $Couleur=$produits->Couleur;
    $available=$produits->available;


 }







?>



<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Produit</title>



    <style>
         @import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Serif:wght@100&family=Rubik+Gemstones&display=swap');
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .nav{
            background-color: beige;
            display: flex;
            justify-content: space-around;
            padding-top: 5px;
        }
        nav ul li {
            display: inline-block;
            position: relative;

        }
        ul li{
            list-style-type: none;
            margin: 10px 25px;
            padding-bottom: 25px;
        }
.dropdown {
            display: none;
            transition: 2s ease-in;
            position: absolute;
            min-width: 250px;
         
            padding: 20px;
           margin-top: 20px; 
            margin-left: -36px;
            background-color: beige;
            z-index: 1;

        }
        .dropdown li{
            border-bottom: 1px solid rgb(36, 33, 33);
        }
        .dropdown a{
            text-align: justify;
        }
        ul li a{
            text-decoration: none;
            color: darkolivegreen;
            font-size: 18px;
            font-weight: bolder;
        }
        ul li a:hover{
            color: rgb(43, 43, 139);
        }
        ul li.dec{
            background-color: rgba(209, 2, 2, 0.822);
            padding: 15px;
            margin-left: 30px;
            box-shadow: 2px 0px 5px rgb(31, 30, 30);
            
        }
        ul li.dec a{
            color: antiquewhite;
            font-weight:500px;
        }
        ul li.dec a:hover{
            color:rgb(40, 40, 255);
           
        }
         .head:hover .dropdown{
            display:block;
            background-color:beige ;

        }
        .logo{
            margin-top: 22px;
        }
        .logo h2{
            text-transform: capitalize;
            font-family:monospace;
            font-size: 22px;
            letter-spacing: 2px;
            color: rgba(49, 49, 49, 0.767);
        }
        .logo h2 span{
            color: rgb(180, 255, 68);
            font-family: 'Rubik Gemstones', cursive;
            font-size: 28px;
            font-weight: lighter;
        }
        .container{
            background-color: rgb(155, 155, 141);
            height:1000px;
            position: relative;
        }
        .form{
      
            position: absolute;
            background-color: white;
            justify-content: center;
            margin: 100px 25% 0;
       width:45%;
         padding: 30px 60px;
         
         box-shadow: 2px 2px 4px #000000

        }
        .form input ,.form textarea,select{
            width: 100%;
            border-radius: 10px
            ;
            margin-bottom: 25px;
            padding: 10px 20px;
            border: 2px solid black;
           
        }
        input{
            outline-color: rgb(255, 193, 132);
        }
       .form h4{
        margin-bottom:20px ;
        font-size: 16px;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
       }
       .form button[type='submit']{
      width: 200px;
      margin-left: 135px;
      background-color: rgba(20, 20, 151, 0.705);
      color: whitesmoke;
      cursor: pointer
      ;
      font-size: 18px;
      border: none;
      border-radius:20px;
      padding: 20px 20px;

       }
    </style>
</head>

<body>
    <header>
        <div class="nav">
            <div class="logo">
                <h2>
                   <span>A</span>ccessoires
                </h2>
            </div>
             <nav>
                <ul>
                    <li>
                        <a href="produits.php">Produits</a>
                    </li>
                    <li>
                        <a href="Clients.php">Clients</a>
                    </li>
                    <li>
                        <a href="Commandes.php">Commandes</a>
                    </li>
                                       
                    <li class="dec">
                    <a href="deco.php">Deconnexion</a>
                </li>
                </ul>
               
            </nav>
        </div>

    </header>
    <div class="container">

        <div class="form">

            <form method="post">
               <h4>Nom de Produit</h4>
                <input type="text" name="nom_P" value="<?= $Nom_P?>">
                <h4>Prix de Produit</h4>
            
                <input type="number" name="prix" value="<?= $Prix_P ?>">
                <h4>image de Produit</h4>
                <input type="text" name="image" value="<?= $Image_P?>">
                <h4>Description de Produit</h4>
              
                <textarea name="desc" id="" cols="30" rows="10"><?= $Description_P?></textarea>


                <h4>Couleur</h4>
                <select for="couleur" name="Couleur">
                    <option value="black"> black </option>
                     <option value="white"> white </option>
                      <option value="red"> red </option>

                </select>
                <h4>Available</h4>
                <select for="available" name="available">
                    <option value="Yes"> Yes </option>
                     <option value="No"> No </option>
                   

                </select>
                <button type="submit" value="Ajouter un produit " name="valider">Enregister</button>
            </form>
        </div>
        
    </div>
    
    
</body>
</html>
<?php

  if(isset($_POST['valider']))
  {
    if(isset($_POST['image']) AND isset($_POST['nom_P']) AND isset($_POST['prix']) AND isset($_POST['desc']))
    {
    if(!empty($_POST['nom_P']) AND !empty($_POST['prix']) AND !empty($_POST['desc']) AND !empty($_POST['image']))
	    {
            $Nom_P = htmlspecialchars(strip_tags($_POST['nom_P']));
            $Prix_P = htmlspecialchars(strip_tags($_POST['prix'])); 
	    	$Description_P= htmlspecialchars(strip_tags($_POST['desc']));

	    	$Image_P = htmlspecialchars(strip_tags($_POST['image']));
             $Couleur=htmlspecialchars(strip_tags($_POST['Couleur']));
             $available=htmlspecialchars(strip_tags($_POST['available']));
            if(isset($_GET['Id_P'])){
    

                if(!empty($_GET['Id_P']) OR is_numeric($_GET['Id_P']))
                {
                    $id_P = $_GET['Id_P'];
                }
            }

	    	
          
          try 
          {
             update($Nom_P,$Prix_P,$Description_P,$Image_P,$id_P,$Couleur,$available);
         echo"<script> window.location.href='produits.php'</script>";
          } 
          catch (Exception $e) 
          {
          	$e->getMessage();
          }

	    }
    }
  }

?>