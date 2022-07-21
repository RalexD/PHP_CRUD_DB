<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel=" " href=" ">
    <title>CRUD</title>
</head>
<body>
    <div class="container mt-4">


  <?php
 require_once 'connect_DB.php';
  ?>
    <div class="row">
    <div class="col">
    <h1>Форма добавления</h1>
    <form action="add.php" method="post">
    <input type="text" class="form-control" name="brand" id="brand" placeholder="Введите марку автомобиля"><br>
    <input type="text" class="form-control" name="model" id="model" placeholder="Введите модель автомобиля"><br>
    <input type="number" class="form-control" name="price" id="price" placeholder="Введите цену автомобиля"><br>
    <button class="btn btn-success" type="submit">Добавить в Базу Данных</button>
    </form>
    </div>

    <div class="col">
    <h1>БД</h1>
    <?php
   // echo '<ul>';
    $result= $pdo->query('SELECT brand, model, price, id FROM crudcars;', PDO::FETCH_ASSOC);
    foreach($result as $row)
        echo $row['brand'], ' - ',
             $row['model'], ' - ',
             $row['price'], '   ',
             '<a href="/crud/delete.php?id='.$row['id'].'"><button class="btn btn-danger btn-sm">Удалить запись</button></a>', '  ',
             '<a href="/crud/update_form.php?id='.$row['id'].'"><button class="btn btn-success btn-sm">Изменить запись</button></a><br><br>';
          //   '<form action="/crud/delete.php?id'.$row['id'].'"><button>Удалить</button></form>';
          //  '<a href="/crud/delete.php?id"'.'4</a>';
    ?>
    </div>
    </div>
    </div>
    
</body>
</html>