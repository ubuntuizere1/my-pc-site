<?php

$hostname = 'tyuu';
$username = 'root';
$password = '';
try{
    $conn = new PDO("mysql:host=$hostname;dbname=esms",$username,$password);
    
    
    // if($conn){
    //     echo " Successfully connected";
    // }
    
}
catch(PDOException $e){
    echo $e -> getMessage();
}
?>