


<?php

$servername = "localhost";
$db = "Projekti";
$username = "root";
$password = "";

try{
    $conn = new PDO("mysql:host=$servername; dbname=$db",$username, $password,array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION) );

    echo "Super";

}catch(PDOException $e){
    echo "Lidhja deshtoi: " . $e->getMessage();
}


?>

