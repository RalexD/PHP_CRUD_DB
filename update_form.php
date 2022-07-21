<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Изменение записи</title>
</head>
<body>
    
<div class="container mt-4">


  <div class="row">
  <div class="col">
  <h1>Форма изменения записи</h1>
  <?php
 echo '<form action="update.php?id=',$_GET['id'],'"method="post">'
  ?>
  <input type="text" class="form-control" name="brand" id="brand" placeholder="Введите марку автомобиля"><br>
  <input type="text" class="form-control" name="model" id="model" placeholder="Введите модель автомобиля"><br>
  <input type="number" class="form-control" name="price" id="price" placeholder="Введите цену автомобиля"><br>
  <button class="btn btn-success" type="submit">Изменить запись</button>
  </form>
  </div>


  </div>
  </div>




</body>
</html>