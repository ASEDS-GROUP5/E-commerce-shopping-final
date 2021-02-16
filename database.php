<?php
define('HOST','sql313.epizy.com');
define('DB_NAME','epiz_27871710_ecommdb');
define('USER','epiz_27871710');
define('PASS','TC0YsyQK5l');
try {
    $db= new PDO("mysql:host=" . HOST . ";dbname=" . DB_NAME , USER,PASS);
    $db->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo $e;
}
?>
