<?php
    try{
        $pdo = new PDO("mysql:host=localhost; dbname=oss", "root", "");
        $pdo->query("set names utf8");
    }catch(Exception $e){
        echo $e->getMessage();
        exit();
    }
?>