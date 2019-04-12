<?php
check_admin();
// 0 recien comprado
// 1 preparando compra
// 2 en camino
// 3 despacha2

$s = $mysqli->query("SELECT * FROM compra WHERE estado !=3");

if (isset($eliminar)){
    $eliminar=clear($eliminar);

    $mysqli->query("DELETE FROM productos_compra WHERE id='$eliminar'");

    $mysqli->query("DELETE FROM compra WHERE id='$eliminar'");
    redir("?p=manejar_traking");
}

?>
<br><br>
<h1>Trakings</h1>

<table class = "table table-stripe">
<tr>
    <th>Cliente</th>
    
    <th>Fecha</th>
    
    <th>Monto</th>
    
    <th>Estado</th>

    <th>Acciones</th>
</tr>
<?php
while($r=mysqli_fetch_array($s)){

    $sc =$mysqli->query("SELECT * FROM usuarios WHERE id = '".$r['id_cliente']."'");
    $rc = mysqli_fetch_array($sc);
    $cliente= $rc['nombre'];


    if ($r['estado']==0){
        $estatus="Recien Comprado";
    }elseif($r['estado']==1){
        $estatus="Preparando Compra";
    }elseif($r['estado']==2){
        $estatus="En Camino";
    }elseif($r['estado']==3){
        $estatus="Finalizado";
    }else{
        $estatus="indefinido";
    }
    ?>
    <tr>
        <td><?=$cliente?></td>
        <td><?=$r['fecha']?></td>
        <td><?=$r['monto']?></td>
        <td><?=$estatus?></td>
        <td>
            <a href="?p=manejar_traking&eliminar=<?=$r['id']?>">
                <i class="fa fa-times"></i>
            </a>
            &nbsp; &nbsp;
            <a href="?p=manejar_status&id=<?=$r['id']?>">
                <i class="fa fa-edit"></i>
            </a>
            &nbsp; &nbsp;
            <a href="?p=ver_compra&id=<?=$r['id']?>">
                <i class="fa fa-eye"></i>
            </a>
<?php
}
?>

</table>
