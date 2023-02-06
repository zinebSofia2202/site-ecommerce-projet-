<?php


require("../commande/fuction.php");
$Produits=affC();
session_start();



if(!isset($_SESSION['SITD1234']))
{
    header("Location: log.php");
}

if(empty($_SESSION['SITD1234']))
{
    header("Location: log.php");
}


?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
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
ul li.dec,button .dec{
    background-color: rgba(209, 2, 2, 0.822);
    padding: 15px;
    margin-left: 30px;
    box-shadow: 2px 0px 5px rgb(31, 30, 30);
    
}
ul li.dec a,button .dec a{
    color: antiquewhite;
    font-weight:500px;
}
ul li.dec a:hover , button .dec a: hover{
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
            height:870px;
            position: relative;
        }
        .form{
      
            position: absolute;
            background-color: white;
            justify-content: center;
            margin: 100px 5% 0;
       width:90%;
         padding: 30px 60px;
         
         box-shadow: 2px 2px 4px #000000

        }
        .form input ,.form textarea{
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
       .form input[type='submit']{
      width: 200px;
      margin-left: 135px;
      background-color: rgba(20, 20, 151, 0.705);
      color: whitesmoke;
      cursor: pointer
      ;
      font-size: 18px;
      border: none;

       }
       table{
        font-family: arial, sans-serif;
        border-collapse: collapse;
  width: 100%;
       }
       th,td {
        border: 1px solid black;
        padding: 10px 5px;

       }
       tr:nth-child(even) {
  background-color: #dddddd;
}
button{
    padding: 15px;
    margin: 15px 90px 80px 10px;
   background-color: rgba(209, 2, 2, 0.822);
    
    box-shadow: 2px 0px 5px rgb(31, 30, 30);
}
button a{
    font-family: serif;
    color: antiquewhite;
    font-weight:500px;
    text-decoration: none;
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
        
            <table>
                <tr>
                <th>ID commande</th>
                <th> ID produit</th>
                <th> ID client</th>
                <th>Prix</th>
                <th>la date</th>
                <th>quantité</th>
                <th>Suprimer</th>
                
                </tr>
                <?php foreach($Produits as $produits):?>
                <tr>
                    <td><?=$produits->ID_CO?></td>
                    <td><?=$produits->ID_P?></td>
                    <td> <?=$produits->ID_C?></td>
                    <td> <?=$produits->prix_f?></td>
                    <td><?= $produits->dateco?></td>
                    <td><?=$produits->quantite?></td>
                    
                    <td><a href="supprimerCO.php?pdt=<?=$produits->ID_CO?>"> supprimer </a></td>
 
                <?php endforeach;?>
            </table>
        </div>
      
    </div>
    
</body>
</html>