<?php
check_admin();
$id=clear($id);
$s= $mysqli->query("SELECT * FROM compra WHERE id = '$id'");
$r=mysqli_fetch_array($s);

if (isset($modificar)){
    $estado= clear($estado);

    $mysqli->query("UPDATE compra SET estado = '$estado' WHERE id= '$id'");
    redir("?p=manejar_traking");
}

?>
<h1>Manejar Estatus<h1>
    <br>
    <form method="post" action="">
        <div class ="form-group">
        <select class="form-control" name="estado">
            <option  <?php if($r['estado']==0){ echo "Seleccionado"; }?> value="0">Recien Comprado</option>
            <option <?php if($r['estado']==1){ echo "Seleccionado"; }?>  value="1">Preparando Compra</option>
            <option <?php if($r['estado']==2){ echo "Seleccionado"; }?> value="2">En Camino</option>
            <option <?php if($r['estado']==3){ echo "Seleccionado"; }?>   value="3">Finalizado</option>

</select>
</div>
<div class="form-group">
    <input type="submit" class="btn btn-primary" value="Set Status" name="modificar"/>

</div>

</form>
