<?php
if(isset($_POST['login'])){
    include 'database.php';
    global $db;
    $msg="";
    $username=$_POST["username"];
    $password=$_POST["password"];
    try{
        if(!empty($username) && !empty($password)){
            
            $q="SELECT * FROM users where username = :username AND password = :password";
            $user=$db->prepare($q);
            $user->execute(array( ':username' => $_POST["username"] , ':password' => $_POST["password"] ));
            $count=$user->rowCount();
            $userarr=$user->fetch();
            ;
           
            if($count!=0) {
                // $q=$db->prepare("SELECT user_id from users where username=$username;");
                // $q->execute();
                // $user=$q->fetch();
                $userid=$userarr['user_id'];
                if($userarr['privilege']!='admin'){
                    setcookie('userid',$userid,time()+3600);
                    header('Location: index.php');
                }else{
                    setcookie('userid',$userid,time()+3600);
                    header('Location: admin_dashboard.html');
                }
            }else{
            $msg='incorrect password or username'; // utilisateur ou mot de passe incorrect
            }
           
            
        }else{
            $msg='Field is required'; // utilisateur ou mot de passe vide
        }
        
    }catch(PDOException $e){
        echo $e->getMessage();
    }
}

?>

