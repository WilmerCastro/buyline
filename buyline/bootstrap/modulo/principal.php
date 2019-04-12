<?php

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/estilo.css" type="text/css">
    <title>Buyline</title>
    
<!---aqui es el javascript del numero de precio--->    
<script>
function solonumeros(e){
key=e.keycode||e.which;
teclado=String.fromCharCode(key);
numeros= "0123456789";
especiales= "8-37-38-46";
teclado_especial= false;
for(var i in especiales){
  if(key==especiales[i]){
    teclado_especial= true;
  }
}
if(numeros.indexOf(teclado)==-1 && !teclado_especial){
return false;
}
}
function solonumeros2(e){
key=e.keycode||e.which;
teclado2=String.fromCharCode(key);
numeros2= "0123456789";
especiales2= "8-37-38-46";
teclado_especial2= false;
for(var i in especiales2){
  if(key==especiales2[i]){
    teclado_especial2= true;
  }
}
if(numeros2.indexOf(teclado2)==-1 && !teclado_especial2){
return false;
}
}
</script>

  </head>
  <body>
    

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.8.1/js/all.js" integrity="sha384-g5uSoOSBd7KkhAMlnQILrecXvzst9TdC09/VM+pjDTCM+1il8RHz5fKANTFFb+gQ" crossorigin="anonymous"></script>

    <!--aqui se ingresa el formulario donde se pone la informacion del carro
    <div class="container">
     
    <form class="" >

  	  <label for:"Estado">Estado = </label>
  	  <select name="Estados de carro">
        <option value="opcion1">Nuevo</option>
        <option value="opcion2">Usado</option>
      </select><br><br>

  	  <label for="Marca">Marca = </label>
  	  <select name="Marcas de carros">
          <option value="opcion1">Toyota</option>
          <option value="opcion2">Ford</option>
          <option value="opcion3">Mercedes-Benz</option>
          <option value="opcion4">Nissan</option>
          <option value="opcion5">Honda</option>
          <option value="opcion6">Audi</option>
        </select><br><br>

  	  <label for="Modelo">Modelo = </label>
      <select name="modelos de carros">
          <option value="opcion1">Auris</option>
          <option value="opcion2">Avenis</option>
          <option value="opcion3">Aygo</option>
          <option value="opcion4">B-MAX</option>
          <option value="opcion5">Focus</option>
          <option value="opcion6">Mondeo</option>
          <option value="opcion7">Citan</option>
          <option value="opcion8">CLA</option>
          <option value="opcion9">Clase A</option>
          <option value="opcion10">370Z</option>
          <option value="opcion11">Evalia</option>
          <option value="opcion12">Juke</option>
          <option value="opcion13">Accord</option>
          <option value="opcion14">Civic</option>
          <option value="opcion15">CR-V</option>
          <option value="opcion16">A1</option>
          <option value="opcion17">A3</option>
          <option value="opcion18">A4</option>
        </select><br><br>
      
    <label for="Año">Año = </label>   
    <select name="modelos de carros">
        <option value="opcion1">1998</option>
        <option value="opcion2">1999</option>
        <option value="opcion3">2000</option>
        <option value="opcion4">2001</option>
        <option value="opcion5">2002</option>
        <option value="opcion6">2003</option>
        <option value="opcion7">2004</option>
        <option value="opcion8">2005</option>
        <option value="opcion9">2006</option>
        <option value="opcion10">2007</option>
        <option value="opcion11">2008</option>
        <option value="opcion12">2009</option>
        <option value="opcion13">2010</option>
        <option value="opcion14">2011</option>
        <option value="opcion15">2012</option>
        <option value="opcion16">2013</option>
        <option value="opcion17">2014</option>
        <option value="opcion18">2015</option>
        <option value="opcion19">2016</option>
        <option value="opcion20">2017</option>
        <option value="opcion21">2018</option>
        <option value="opcion22">2019</option>
      </select>

      <p> Hasta </p>

      <label for="Año">Año = </label>   
      <select name="modelos de carros">
          <option value="opcion1">1998</option>
          <option value="opcion2">1999</option>
          <option value="opcion3">2000</option>
          <option value="opcion4">2001</option>
          <option value="opcion5">2002</option>
          <option value="opcion6">2003</option>
          <option value="opcion7">2004</option>
          <option value="opcion8">2005</option>
          <option value="opcion9">2006</option>
          <option value="opcion10">2007</option>
          <option value="opcion11">2008</option>
          <option value="opcion12">2009</option>
          <option value="opcion13">2010</option>
          <option value="opcion14">2011</option>
          <option value="opcion15">2012</option>
          <option value="opcion16">2013</option>
          <option value="opcion17">2014</option>
          <option value="opcion18">2015</option>
          <option value="opcion18">2016</option>
          <option value="opcion18">2017</option>
          <option value="opcion18">2018</option>
          <option value="opcion18">2019</option>
        </select><br><br>

        
        <label for="precio">precio = </label> 
        <input type="text" name="numero" onkeypress= "return solonumeros(event)" onpaste="return false">

        <br><p>hasta</p>

<label for="precio">precio = </label> 
        <input type="text" name="numero2" onkeypress= "return solonumeros2(event)" onpaste="return false">
    
<br><label for="Lugar">Lugar = </label>

<select name="modelos de carros">
    <option value="opcion1">Azua</option>
    <option value="opcion2">Bahoruco</option>
    <option value="opcion3">Narahona</option>
    <option value="opcion4">Dajabón</option>
    <option value="opcion5">Distrito Nacional</option>
    <option value="opcion6">Duarte</option>
    <option value="opcion7">Elías Piña</option>
    <option value="opcion8">El Seibo</option>
    <option value="opcion9">Espaillat</option>
    <option value="opcion10">Hato Mayor</option>
    <option value="opcion11">Hermanas Mirabal</option>
    <option value="opcion12">Independencia</option>
    <option value="opcion13">La altagracia</option>
    <option value="opcion14">La Romana</option>
    <option value="opcion15">La Vega</option>
    <option value="opcion16">María Trinidad Sánchez</option>
    <option value="opcion17">Monseñor Nouel</option>
    <option value="opcion18">Monte Cristi</option>
    <option value="opcion19">Monte Plata</option>
    <option value="opcion20">Perdenales</option>
    <option value="opcion21">Peravia</option>
    <option value="opcion22">Puerto plata</option>
    <option value="opcion23">Samana</option>
    <option value="opcion24">San Cristobal</option>
    <option value="opcion25">San José de Ocoa</option>
    <option value="opcion26">San juan</option>
    <option value="opcion27">San Pedro de Macorís</option>
    <option value="opcion28">Sánchez Ramírez</option>
    <option value="opcion29">Santiago</option>
    <option value="opcion30">Santiago Rodríguez</option>
    <option value="opcion31">Santo Domingo</option>
    <option value="opcion32">Valverde</option>
  </select><br><br>

    <br></br><button class="btn btn-primary">Buscar</button>


    </form>
    </div>
-->
    <?php

if (isset($agregar) && isset($cant)){ //si se agrega al carrito
  $idp = clear($agregar);
  $cant = clear($cant); 
  $id_cliente=clear($_SESSION['id_cliente']);

  $v =$mysqli->query("SELECT * FROM carrito WHERE id_cliente = '$id_cliente' AND id_producto = '$idp'");
  if  (mysqli_num_rows($v) >0) { //si ya hay elementos en el carrito del mismo tipo
    $q = $mysqli->query("UPDATE carrito SET  cant = cant + $cant WHERE id_cliente = '$id_cliente' and id_producto = '$idp'" );
  }else{//nuevo elemento
    $q = $mysqli->query("INSERT INTO carrito (id_cliente,id_producto,cant) VALUES ($id_cliente,$idp,$cant)");
  }
 
  
  alert("Se ha agregado al carro de compras");
redir("?p=principal");
 }

$q = $mysqli->query("SELECT * FROM vehiculos ORDER BY id DESC"); //query
while ($r =mysqli_fetch_array($q)) { 
    ?>
    <div class="producto">
   <div class="name_producto"> <?=$r['marca']?> <?=$r['modelo']?> </div>
    <div><img class="img_vehiculo" src="../config/vehiculos/<?=$r['imagen']?>"></div>
    <label class="precio">  <?=$divisa?> <?=number_format($r['precio'])?> </label>
    <?php
    if(isset($_SESSION['id_cliente'])){ //si hay una sesion iniciada
      ?>
    <button class="btn btn-warning" onclick="agregar_carro('<?=$r['id']?>');" id="boton_carrito" ><i class="fas fa-cart-plus"></i></i> </button>
   <?php
    }
   ?> 
  </div>
    <?php
}
?>

<script type="text/javascript">
function agregar_carro(idp){
 
 
 
  var cant= prompt("Que cantidad desea agregar?",1); 

 
  if(cant.length>0){
  window.location="?p=principal&agregar="+idp+"&cant="+cant;
  

  }
}
</script>
  </body>
</html>
