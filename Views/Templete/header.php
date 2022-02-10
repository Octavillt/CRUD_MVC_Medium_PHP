<?php require_once("../../Config/config.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= BASE_URL ?>Assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <title>CRUD MVC</title>
</head>
<header>
   <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><strong>MVC</strong>Medium</a>
   <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
       <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="<?= BASE_URL ?>Views/Usuario/">Inicio</a>
     </li>
     <li class="nav-item">
        <a class="nav-link" href="<?= BASE_URL ?>Views/Usuario/crear_usuario.php">Registrar Usuario</a>
     </li>
  </ul>
  <form class="d-flex">
    <input class="form-control me-2" type="search" placeholder="Buscar Usuario">
    <button class="btn btn-outline-success" type="submit">Buscar</button>
 </form>
</div>
</div>
</nav>

</header>





