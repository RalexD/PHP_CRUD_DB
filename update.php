<?php
require_once 'connect_DB.php';



$brand= $_POST['brand'];
$model=  $_POST['model'];
$price=  $_POST['price'];
$upd_id= $_GET['id'];

echo $brand, $model, $price, $upd_id;

//$sql= 'UPDATE crudcars SET brand = :brand, model= :model, price= :price WHERE id=:upd_id';
//$query= $pdo->prepare($sql);
//$query->execute(['brand' =>$brand, 'model' => $model, 'price' =>$price, 'id' =>$upd_id]);

$sql = "UPDATE crudcars SET brand=?, model=?, price=? WHERE id=?";
$pdo->prepare($sql)->execute([$brand, $model, $price, $upd_id]);


//$sql= 'DELETE FROM crudcars WHERE id = ?';
//$query= $pdo->prepare($sql);
//$query->execute([$del_id]);
header('Location: /crud/index.php');

?>