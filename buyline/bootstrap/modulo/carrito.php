<?php
if(isset($finalizar)){
    $monto=clear($monto_total);
    $id_cliente=clear($_SESSION['id_cliente']);

    $q =$mysqli->query("INSERT INTO compra (id_cliente,fecha,monto,estado) VALUES ('$id_cliente',NOW(),'$monto',0)");
    $sc= $mysqli->query("SELECT * FROM compra WHERE id_cliente = '$id_cliente' ORDER BY id DESC LIMIT 1");
   
    $rc=mysqli_fetch_array($sc);

    $ultima_compra = $rc['id'];

    $q2= $mysqli->query("SELECT * FROM carrito WHERE id_cliente = '$id_cliente'");
    while($r2=mysqli_fetch_array($q2)){
        $sp = $mysqli->query("SELECT * FROM vehiculos WHERE id= '".$r2['id_producto']."'");
        $rp= mysqli_fetch_array($sp);

        $monto = $rp['precio'];

        $mysqli->query("INSERT INTO productos_compra (id_compra,id_producto,cantidad,monto) 
        VALUES ('$ultima_compra','".$r2['id_producto']."','".$r2['cant']."','$monto')");
    }

    $mysqli->query("DELETE FROM carrito WHERE id_cliente='$id_cliente'");
    alert("se ha finalizado la compra");
    redir("./");

}
?>


<br><br>
<h1><i class="fas fa-shopping-cart"></i> Mi carrito de compras</h1>
<br><br>
<table class="table table-striped">
    <tr>
        <th>  <i class="fas fa-image" style="margin-left:18px;"></i></th>
        <th>Marca del vehículo</th>
        <th>Modelo</th>
        <th>Cantidad</th>
        <th>Precio unitario</th>
        <th>Precio Total</th>
        
</tr>
<?php
$id_cliente=clear($_SESSION['id_cliente']);
$q=$mysqli->query("SELECT * FROM carrito WHERE id_cliente ='$id_cliente'");
$monto_total=0;
while($r=mysqli_fetch_array($q)){
    $q2 = $mysqli->query("SELECT * FROM vehiculos WHERE id = '".$r['id_producto']."'");
    $r2= mysqli_fetch_array($q2);
    $nombre_producto= $r2['marca'];
    $modelo_producto=$r2['modelo'];
    $cantidad=$r['cant'];
    $precio_unidad=$r2['precio'];
    $precio_total=$cantidad * $precio_unidad;
    $imgagen_producto=$r2['imagen'];
    $monto_total=$monto_total + $precio_total;
    ?>
    <tr>
        <td><img src="../config/vehiculos/<?=$imgagen_producto?>" class="imagen_carrito"></td>
        <td><?=$nombre_producto?></td>
        <td><?=$modelo_producto?></td>
        <td><?=$cantidad?></td>
        <td><?=number_format($precio_unidad)?>  <?= $divisa?></td>
        <td><?=number_format($precio_total)?>  <?= $divisa?></td>
</tr>
<?php

}
?>
</table>


<div style="float:right;">
<h4 style=" margin-top:4px;  ">Monto Total: <b class="text-green"><?=number_format($monto_total)?>  <?=$divisa?></b></h4 >
<br>
<form method="post" action="">
<input type="hidden" name="monto_total" value="<?=$monto_total?>"/>
<button type="sumbit" class="btn btn-primary" name="finalizar" style="float:right;" ><i class="fa fa-check"></i>Finalizar Compra</button>
</form>

</div>
