<?php


require("../commande/fuction.php");
$Produits=affiche();
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
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
            height:870px;
            position: relative;
        }
        .form{
      
            position: absolute;
            background-color: white;
            justify-content: center;
            margin: 100px 10% 0;
       width:80%;
         padding: 30px ;
         
         box-shadow: 2px 2px 4px #000000

        }
        .form input ,.form textarea{
            width: 25%;
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
        input[type='submit']{
      width: 200px;
      margin-left: -206px;
      margin-top:80px;
      background-color: rgba(20, 20, 151, 0.705);
      
      color: whitesmoke;
      cursor: pointer
      ;
      font-size: 18px;
      border: none;


       }
       .btn{
        margin-top:50px;
        position: absolute;
       }
       .forma{
        margin:66px ;
       }
       .forma h1 { 
        font-size:28px;
        margin-bottom:30px;
    
       }
       table{
        font-family: arial, sans-serif;
        border-collapse: collapse;
  width: 45%;
  margin-left:50%;
  margin-top:-196px;
       }
       th,td {
        border: 1px solid black;
        padding: 10px 5px;

       }
       tr:nth-child(even) {
  background-color: #dddddd;
}
    </style>
</head>

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
                        <a href="ajouter.php">Ajouter un Produit</a>
                    </li>
                    <li>
                        <a href="delete.php">Suprimer un Produit</a>
                    </li>
                    <li>
                        <a href="produits.php">Modifier un Produit</a>
                    </li>
                    <li class="head">
                        <a href="">Produits</a>
                        <ul class="dropdown">
                            <li>
                                <a href="">Historique de commande</a>
                            </li>
                            <li>
                                <a href="">Clients</a>
                            </li>
                        </ul>
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
            <div class="forma">
            <form action="" method="post">
                <h1>Selectionner le ID</h1>
                <input type="number" name="id_P"  >
                <input class="btn" type="submit" value="Supprimer" name="valider">
            </form>
            </div>
            <table>
                <tr>
                <th>ID produit</th>
                <th> Nom de Produit</th>
                <th> Image de Produit</th>
                
                </tr>
                <?php foreach($Produits as $produits):?>
                <tr>
                    <td><?=$produits->Id_P?></td>
                    <td><?=$produits->Nom_P?></td>
                    <td> <img src="<?=$produits->Image_P?> " alt=""></td>
 
                <?php endforeach;?>
            </table>
        </div>
      
    </div>
    
</body>
</html>
<?php

  if(isset($_POST['valider']))
  {
    if(isset($_POST['id_P']))
    {
    if(!empty($_POST['id_P']) AND is_numeric($_POST['id_P']))
	    {
	    	$id_P = htmlspecialchars(strip_tags($_POST['id_P']));

          try 
          {
            delete($id_P);
            
          } 
          catch (Exception $e) 
          {
          	$e->getMessage();
          }
	    	


	    }
    }
}
    ?>