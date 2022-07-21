<?php
require_once 'connect_DB.php';


$brand= $_POST['brand'];
$model=  $_POST['model'];
$price=  $_POST['price'];

$sql= 'INSERT INTO crudcars (brand, model, price) VALUES(:brand, :model, :price)';
$query= $pdo->prepare($sql);
$query->execute(['brand'=> $brand,'model'=> $model,'price'=> $price]);


header('Location: /crud/index.php')

?>