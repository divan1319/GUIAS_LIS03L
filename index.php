<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    
</head>
<style>
    body{
        bbackground-color: antiquewhite;
    }
</style>
<body>
<?php
include('components/menu.php');
?>
<div class="container is-fluid" style=" background-color: antiquewhite;">
<div class="container p p-4">
<div class="card">
  <div class="card-image ">
    <figure class="image is-16by9">
      <img src="https://www.mu.my/files/uploads/mu-php-mysql-laravel-training.png" alt="Placeholder image">
    </figure>
  </div>
  <div class="card-content">
    <div class="media">
      <div class="media-left">
        <figure class="image is-96x96">
          <img class="is-rounded" src="https://scontent.fsal3-1.fna.fbcdn.net/v/t39.30808-6/321357578_5007688089334831_2267869385905234878_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=DHPkZE3bkDMAX8v4fko&_nc_ht=scontent.fsal3-1.fna&oh=00_AfBYOGh0VsqcIII5bC-8NI_fqiRQFDVJ0Dk0Ea43U8pHZA&oe=63D74A8D" alt="Placeholder image">
        </figure>
      </div>
      <div class="media-content">
        <p class="title is-4">Daniel Iván López Garcia</p>
        <p class="subtitle is-6">LG190078</p>
      </div>
    </div>

    <div class="content">
     Estudiante cuarto año de la Ingenieria en Ciencias de la Computacion.
      <br>
      
      <time datetime="2016-1-1">Ultima actualizacion: 11:09 PM - 1 Jan 2016</time>
    </div>
  </div>
</div>
</div>
</div>
<?php
include('components/footer.php');
?>
</body>

</html>