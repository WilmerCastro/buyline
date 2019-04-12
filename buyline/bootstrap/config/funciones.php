<?php
$host_mysqli = "localhost";
$user_mysqli = "root";
$pass_mysqli = "";
$db_mysqli = "buyline";
//coneccion a la db
$mysqli=mysqli_connect($host_mysqli,$user_mysqli,$pass_mysqli,$db_mysqli) or die ("error al conectar con el servidor");
// pa limpiar
function clear ($var){
    htmlspecialchars($var);
    return $var;

}
function check_admin(){
    if (!isset($_SESSION['id'])){
        redir("./");
    }
}
//redir, de redireccionar :v
function redir ($var){

    ?>
    <script>
    window.location="<?=$var?>";
     
    </script>
    <?php
    die();
}
//mensaje de javascript
function alert ($var){
    ?>
    <script type="text/javascript">
    alert("<?=$var?>");
    </script>
    <?php
}

function check_user($url){ //chekear si hay una sesion usuario
    if(!isset($_SESSION['id_cliente'])){ 
        redir("?p=login&return=<?=$url?>");

    }

}
function nombre_usuario($id_cliente){ //creo que lo hice para devolver el nombre del usuario
    $mysqli=connect();
    $q= $mysqli->query("SELECT * FROM usuarios WHERE id= '$id_cliente'");
    $r = mysqli_fetch_array($q);
    return $r['nombre'];
}
function connect(){ //conectarse a la DB
    $host_mysqli = "localhost";
$user_mysqli = "root";
$pass_mysqli = "";
$db_mysqli = "buyline";
$mysqli=mysqli_connect($host_mysqli,$user_mysqli,$pass_mysqli,$db_mysqli) or die ("error al conectar con el servidor");
return $mysqli;
}
 
function estadoo($id_estado){ //estado del producto

    if ($id_estado==0){
        $estatus="Recien Comprado";
    }elseif($id_estado==1){
        $estatus="Preparando Compra";
    }elseif($id_estado==2){
        $estatus="En Camino";
    }elseif($id_estado==3){
        $estatus="Finalizado";
    }else{
        $estatus="indefinido";
    }
    return $estatus;    
}
?>