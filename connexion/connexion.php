<?php

try{
$conn = new pdo("mysql:host=localhost; dbname=site_ecommerce; charset=utf8","root","");
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}
catch(Exception $e ){
    $e->getMessage();
}
?>