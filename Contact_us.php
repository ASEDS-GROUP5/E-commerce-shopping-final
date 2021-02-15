<?php
                // $serveur = "localhost";
                // $dbname = "ecommdb (2)";
                // $user = "root";
                // $pass = "";
                include 'database.php';
                global $db;
                $prenom = $_POST["fname"];
                $mail = $_POST["femail"];
                $text = $_POST["ftext"];
                
                try{
                    //On se connecte à la BDD
                    // $db = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
                    // $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                    //On insère les données reçues
                    // $q=$db->prepare("SELECT user_id from users where username=$prenom");
                    // $q->execute();
                    // $qr=$q->fetch();
                    $sth = $db->prepare("
                        INSERT INTO messages(username, email, message)
                        VALUES(:username, :mail, :text)");
                    $sth->bindParam(':username',$prenom);
                    $sth->bindParam(':mail',$mail);
                    $sth->bindParam(':text',$text);
                    $sth->execute();
                    
                    //On renvoie l'utilisateur vers la page de 
                    header("location:Contact_us.html");
                   

                    
                }
                catch(PDOException $e){
                    echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
                }
                ?>