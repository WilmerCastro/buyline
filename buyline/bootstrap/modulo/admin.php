<?php


if (isset($enviar)){ //cuando precionen enciar
  $usuario = clear($usuario);
  $contrasenia=clear($contrasenia); 
  //la sentencia
  $q= $mysqli->query("SELECT * FROM administradores WHERE usuario = '$usuario' AND contrasenia = '$contrasenia'");
  
  
  if($q === FALSE) { 
    alert("pikachu.surpriced");
    die(mysql_error()); // a ver si cae aqui :'v
}
  if(mysqli_num_rows($q)>0){ //si encuentra una acc
    
    $r = mysqli_fetch_array($q);
    $_SESSION['id'] = $r['id'];
    
    redir("?p=admin"); 
  }else{ //bueno.. no tengo que explicarlo, no?
    alert("los datos no son validos");
    redir("?p=admin");
  }
}

if (isset($_SESSION['id'])){ //si ya hay sesion iniciada

  ?>
  <a href="?p=agregar_producto">
    <button class ="btn btn-primary btn-lg" style="margin-top:7%;margin-left:5%" ><i class="fa fa-plus-circle"></i>Agregar Vehiculo</button>
    <a href="?p=manejar_traking">
    <button class ="btn btn-info btn-lg" style="margin-top:7%;margin-left:5%"><i class="fas fa-plane-departure"></i>Manejar Traking</button>
  <?php

}else{ //si no hay sesion iniciada
?>
<div style="margin-left: 10%; margin-right: 10%;">
  <form method="post" action="">
<div  style="margin-top: 5%"> 
                    <blockquote class="blockquote text-center">
                        
                          <p class="mb-0" style="font-size: 170%">Solo Administradores</p>
                          
                        </blockquote>
                  </div>    
                  
                          <div class="form-group">
                                <label for="inputAddress">Nombre de Usuario</label>
                                <input type="text" class="form-control" id="inputAddress" name="usuario">
                              </div>
                          <div class="form-group">
                                    <label for="inputAddress">Contraseña</label>
                                    <input type="password" class="form-control" id="inputAddress" name="contrasenia" >
                                  </div>
                     
                        
                        <div class="form-group">
                          
                        <button type="submit" name="enviar" class="btn btn-primary">Enviar</button>
                    </div>
                      </form>
</div>
<?php

}
?>