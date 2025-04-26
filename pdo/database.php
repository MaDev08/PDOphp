<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "pdophp";

try{

    $con = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo " Conectado!!!";

}catch(PDOException $er){
    echo "erro" .$er->getMessage();
}


?>
