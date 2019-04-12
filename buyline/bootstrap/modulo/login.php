<?php
if(isset($_SESSION['id_cliente'])){
    alert("ya :v");
    redir("./");
    

}


if (isset($enviar)){ //cuando precionen enciar
  $usuario = clear($usuario);
  $contrasenia=clear($contrasenia); 
  //la sentencia
  $q= $mysqli->query("SELECT * FROM usuarios WHERE usuario = '$usuario' AND contrasenia = '$contrasenia'");
  
  
  if($q === FALSE) { 
    alert("pikachu.surpriced");
    die(mysql_error()); // a ver si cae aqui :'v
}
  if(mysqli_num_rows($q)>0){ //si encuentra una acc
    
    $r = mysqli_fetch_array($q);
    $_SESSION['id_cliente'] = $r['id'];
    
    redir("./"); 
  }else{ //bueno.. no tengo que explicarlo, no?
    alert("los datos no son validos");
    redir("?p=login");
  }
}

?>
<div style="margin-left: 10%; margin-right: 10%;">
  <form method="post" action="">
<div  style="margin-top: 5%"> 
                    <blockquote class="blockquote text-center">
                        
                          <p class="mb-0" style="font-size: 170%">Iniciar Sesion</p>
                          
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
