<?php
include "config/config.php";
include "config/funciones.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Buyline</title>
  </head> 
  <body>
    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark sticky-top" >
      <a class="navbar-brand" href="#">
              <img src="img/logo.png" width="180" height="75" class="d-inline-block align-top" alt="">
              
            </a>
    
            
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <div class="dropdown">
      <select class="custom-select" id="inputGroupSelect04" aria-label="Example select with button addon">
        <option selected, value="1">Nuevos</option>
        <option value="2">Medio Uso</option>
        <option value="3">Usados</option>
        
        <option value="3">Piesas</option>
      </select>
    </div>
  </div>
  
  <input type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
  
    <button class="btn btn-danger" type="button">Buscar</button>
  

  
  <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
      <a class="nav-link" href="#">Registrate! <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Ya tengo cuenta</a>
    </li>
   

  </ul>
</div>
       </nav>
     
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>