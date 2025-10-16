<?php
    $servername='localhost';
    $username='root';
    $dbname='auto_ecole';
    $password='';
    //pour se connecter à notre base de donnée
    try{
        $conn=new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e){
        echo "erreurBG".$e->getMessage();
        $conn= NULL;
    }

    
    

    
?>