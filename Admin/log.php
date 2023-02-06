<?php
session_start();

include_once "../commande/fuction.php";

if(isset($_SESSION['SITD1234']))
{
    if(!empty($_SESSION['SITD1234']))
    {
header("Location :ajouter.php");
    }
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="nouveau\nouveau.css"/>
</head>
<style>
    *{
  margin: 0px;
  padding: 0px;
  box-sizing: border-box;
  font-family: 'poppins', sans-serif;
  scroll-behavior: smooth;
}

body{
background-color:  rgb(234, 210, 168);
    background-repeat: no-repeat;
    background-size: cover;
}
form{
  background-color: #fff;
  position: absolute;
  top: 65%;
  left: 50%;
  transform: translate(-50% , -50%);
  width: auto;
  font-weight: bold;
  padding: 20px;
  border-radius: 10px;
  font-family: Andale Mono, monospace;
  width: 50%;
}
form h2{
font-size: 30px;
}
form .separation {
  width: 100%;
  height: 1px;
  background-color:  rgb(255,193,132);
}
form .corps-form{
  margin-bottom: 30px;
}
form .corps-form .boite{
  position: relative;
  margin-top: 20px ;
  display: flex;
  flex-direction: column;
}
input{
  margin-top: 5px;
  padding: 10px 5px 10px 30px;
  border: 1px solid #c9c9c9;
  outline-color:  rgb(255,193,132) ;
  border-radius: 5px;
}
i{
 position: absolute;
 left: 0;
 top: 25px;
 padding: 9px 8px;
 color: rgb(255,193,132) ;
}
form .peid-formulaire input{
  margin-top: 10px;
  font-size: 15px;
  color: white;
  background-color: rgb(255,193,132);
  border: none;
  padding:  20px 30px;
  outline: none;
  cursor: pointer;
  border-radius: 10px;
  transition: transform 0.5s;
  font-family: Andale Mono, monospace;
}
.peid-formulaire input:hover{
  transform: scale(1.05);
  color:rgb(70,70,70);
  cursor: pointer;
  background-color: white;
  border-style: solid;
  border-color: white;
}

footer{
  background-color:#fff;

padding: 0;
margin: 0;
  position: relative;
  top: 900px;
}
.footer{
  display: flex;
  justify-content: space-around;


  text-align: center;
  max-width: 100%;
  padding: 10px 25px 0;
  border-bottom: 1px solid  rgb(255,193,132);
}

.cont{
  flex-basis: 30%;
  width: 30%;
  padding-left: 20px;
}
.feedbak{
  flex-basis: 30%;
  width: 30%;
  padding-left: 20px;

}
.aboutus{
  flex-basis: 30%;
  text-align: justify;
  padding-left: 28px;
  width: 30%;
  padding-right: 40px;

}
.aboutus h1, .feedback h1 , .cont h1{

  font-size: 33px;
  font-weight: bold;
  padding: 15px 5px 20px 0px;
  border-bottom: 2px solid rgb(231, 231, 74);
  margin-bottom: 15px;
  width: 400px;


}
.aboutus p span{
color: rgba(37, 43, 34, 0.836);
}
.aboutus .p{
  font-weight: bolder;
  padding-bottom: 7px;
  font-family:Verdana, Geneva, Tahoma, sans-serif;
  font-style: italic;
  font-size: 15px;


}
.aboutus ul{
  list-style-type: none;
  margin: 5px 26px 10px;
  font-family: Verdana, Geneva, Tahoma, sans-serif;
  font-style: italic;
}
.aboutus .adresse{
  font-size: 18px;
  margin-bottom: 20px;
}
.cont p{
  text-align:justify ;
  padding-bottom: 15px;
  font-size: 25px;
  margin-left: 30px;
  width: 100%;
}
.feedback p{
  text-align: justify;
  font-size: 25px;
  font-family: cursive;
font-style: oblique;
margin-left: 30px;
padding-left: 100px;
padding-right: 25px;
padding-bottom: 25px;
}
.feedback input[type='text']{
  width: 350px;
  padding: 10px 20px;
  margin-left: 80px;
  position: relative;
  font-size: 25px;
 color: rgb(39, 35, 35);
  font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}


.copy{
  text-align: center;
  margin: 0 20px;
  padding: 10px;
}

</style>
<body>

 <form method ="POST">
    <h2 align="center">Connexion</h2>
     <div class="separation"></div>
     <div class="corps-form">
   <div class="boite">
    <label for=""> log in</label>
    <input type="text" name="ID"  placeholder="saisir log in ">
    <i class="fa-solid fa-envelope"></i>
   </div>
   <div class="boite">
   <label for="">Password</label>
   <input type="password"name="pass"  placeholder="entrez votre mot de passe">
   <i class="fa-solid fa-lock"></i>
   </div>
 </div>
   <div class="peid-formulaire" align="center">
    <input type="submit" class="btn btn-primary" name="seconnecter" value="Connexion">
  </div>

 </form>
 <footer>
 
    <p class="copy">  &#169;Copyright 2022 www.MedBen.com .All right reserved</p>
</footer>

</body>
</html>
<?php

if(isset($_POST['seconnecter']))
{
    if(!empty($_POST['ID']) AND !empty($_POST['pass']))
    {
        $login = htmlspecialchars(strip_tags($_POST['ID'])) ;
        $motdepasse = htmlspecialchars(strip_tags($_POST['pass']));

        $admin = getAdmin($login, $motdepasse);

        if($admin){
            $_SESSION['SITD1234'] = $admin;
          echo "<script>
          window.location.href='produits.php'
          </script>";
        }else{
            echo "vous avez un probème";
  
        }
    }

}

?>
