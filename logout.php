<?php
    if(isset($_POST['logout'])){
       
        setcookie('userid','',time()-700000);
        session_destroy();
        header('Location:login.html');
    }

?>