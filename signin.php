<?php       
    if(isset($_POST['formsend'])){
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $phone = $_POST["phone"];
        if(!empty($username) && !empty($email) && !empty($phone) && !empty($password)){
            include 'database.php';
            global $db;
            try{
                $q = $db->prepare("INSERT INTO users(username,email,password,contact) VALUES (:username,:email,:password,:phone)");
                $q->bindParam(':username',$username);
                $q->bindParam(':email',$email);
                $q->bindParam(':password',$password);
                $q->bindParam(':phone',$phone);
                $q->execute();
                }catch(PDOException $e){
                    echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
                }
        }
        header('Location:signUp.html');
    }
?>