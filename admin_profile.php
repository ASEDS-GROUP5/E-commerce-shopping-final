<?php

    $username = valid_donnees($_POST["username"]);
    $email = valid_donnees($_POST["email"]);
    $passw = valid_donnees($_POST["pass"]);
    
    
    function valid_donnees($donnees){
      $donnees = trim($donnees);
      $donnees = stripslashes($donnees);
      $donnees = htmlspecialchars($donnees);
      return $donnees;
  }
  include 'database.php';
  global $db;
 try{
                if($username !== "" && $passw !== "" && $email !=""){
    
                  //On prépare la requête et on l'exécute
                  $sth = $db->prepare("
                    UPDATE users 
                    SET email='$email', password = '$passw' , username='$username' 
                    WHERE privilege='admin'
                  ");
                  $sth->execute();
                  
                  //On redirige vers la même page
                  header("Location:admin_profile.html");
                } else{
                  header('Location: admin_profile.html');
                }
		
            }
                  
            catch(PDOException $e){
                echo "Erreur : " . $e->getMessage();
            }
?>