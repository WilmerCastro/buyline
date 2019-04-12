<?php
include "../config/config.php";
include "../config/funciones.php";
if (!isset($p)){
  $p="principal";
}else{
  $p=$p;
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script defer src="https://use.fontawesome.com/releases/v5.8.1/js/all.js" integrity="sha384-g5uSoOSBd7KkhAMlnQILrecXvzst9TdC09/VM+pjDTCM+1il8RHz5fKANTFFb+gQ" crossorigin="anonymous"></script>    
    <!-- Bootstrap CSS -->
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/estilo.css" type="text/css">
    <title>Buyline</title>
  </head> 
  <body>
    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark sticky-top" >
      <a class="navbar-brand" href="?=principal">
              <img src="../img/logo.png" width="180" height="75" class="d-inline-block align-top" alt="">
              
            </a>
    
            
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <div class="dropdown">
      <select class="custom-select" id="inputGroupSelect04" aria-label="Example select with button addon">
        <option selected, value="1">Nuevos</option>
        <option value="2">Medio Uso</option>
        <option value="3">Usados</option>
        
       
      </select>
    </div>
  </div>
  
  <input type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
  
    <button class="btn btn-danger" type="button">Buscar</button>
  

  
  <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
      <a class="nav-link" href="?p=login">Iniciar Sesion <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="?p=admin">Administrador</a>
     
    </li>
    <?php
    if (isset($_SESSION['id'])){
      ?>
      <li class="nav-item">
     <div style="margin-top:8px; margin-left:10px;margin-right:10px;">
   <a href="?p=salir" id="btn_salir" >salir</a>
    </div>
    <?php
    }
    if(isset($_SESSION['id_cliente'])){
      ?>
      <li class="navbar-nav active" style=" margin-left:10px;margin-right:2px;">
   <a class="nav-link" href="#"><i class="fas fa-user"></i>    <?=nombre_usuario($_SESSION['id_cliente'])?></a>
   </li>
   <li class="navbar-nav active" style=" margin-left:2px;margin-right:10px;">
   <a class="nav-link" href="?p=carrito"></i><i class="fas fa-shopping-cart">   </i> Carrito</a>
   </li>
   <li class="nav-item">
     <div style="margin-top:8px; margin-left:10px;margin-right:10px;">
   <a href="?p=salir" id="btn_salir" >salir</a>
    </div>
   </li>
<?php
    }
    ?>
   

  </ul>
</div>
       </nav>
     <div class="cuerpo" style="min-height:600px"><!-- basicamente esto es el cuerpo de la pagina
    y cuando le demos a una parte de la misma si no encuentra el archivo, dira que no se ha encontrado *nombre modulo* -->
     <?php
     if (file_exists($p.".php")){
       include $p.".php";
     }else{
       echo "<i>No se ha encontrado el modulo <b>".$p."</b> <a href='./'>Regresar</a></i>";
     }
     ?>
     </div>
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="../js/bootstrap.min.js"></script>
    <div class="footer">
    
     --Creado Por Wilmer Castro, Ivan Polanco, y Rhailin Amable--Copyright © 2019. Todos los derechos reservados.

     </div>
  </body>
</html>