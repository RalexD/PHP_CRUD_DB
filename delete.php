<?php
require_once 'connect_DB.php';

$del_id=$_GET['id'];
$sql= 'DELETE FROM crudcars WHERE id = ?';
$query= $pdo->prepare($sql);
$query->execute([$del_id]);

header('Location: /crud/index.php')

?>