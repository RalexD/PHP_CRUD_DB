<?php ## Соединение с базой данных
    try{
        $pdo= new PDO('mysql:host=localhost;dbname=crud', 'root', '');
    }
    catch(PDOException $e) {
        echo "Невозможно подключить БД";
    }
?>