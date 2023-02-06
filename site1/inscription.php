
<?php 
require "../connexion/connexion.php";
session_start();

   
    if(!empty($_POST['name']) && !empty($_POST['tel']) && !empty($_POST['pass']) && !empty($_POST['mail']))
    {
  
        $Nom_C = htmlspecialchars($_POST['name']);
        $Email_C = htmlspecialchars($_POST['mail']);
        $Tel_C = htmlspecialchars($_POST['tel']);
        $Mdp_C = htmlspecialchars($_POST['pass']);

        $A = $conn->prepare("SELECT Id_C, Email_C, Nom_C, Mdp_C FROM clients WHERE Email_C = ?");
        $A->execute(array($Email_C));
        $x = $A->fetchAll(PDO::FETCH_OBJ);
        $row = $A->rowCount();
        

        $Email_C = strtolower($Email_C); 
        if($row == 0){ 
            if(strlen($Nom_C) <= 100){ 
                if(strlen($Email_C) <= 100){ 
                    if(filter_var($Email_C, FILTER_VALIDATE_EMAIL)){ 
                     
                         
                            
                            
                       
                            $B = $conn->prepare("INSERT INTO clients(Email_C, Nom_C, Tele_C, Mdp_C) VALUES(? , ? , ? , ?)");
                            $B->execute(array( $Email_C,$Nom_C,$Tel_C,$Mdp_C ));

                        echo "<script>window.location.href='Connexion.php?valid'</script>";
            
                            die();
                          
                     
                    }else{ header('Location: registre.php?error=Email'); die();}
                }else{ header('Location: registre.php?error=email_length'); die();}
            }else{ header('Location: registre.php?error=pseudo_length'); die();}
        }else{ header('Location: registre.php?error=already'); die();}
    }