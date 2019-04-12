<?php
check_admin();
$id = clear($id);

$s = $mysqli->query("SELECT * FROM compra WHERE id = '$id'");
$r = mysqli_fetch_array($s);

$sc = $mysqli->query("SELECT * FROM usuarios WHERE id = '".$r['id_cliente']."'");
$rc = mysqli_fetch_array($sc);

$nombre = $rc['nombre'];
?>
<br>
<h1> Viendo Compra de <span style="color:#08f"><?=$nombre?> </span></h1><br>

Fecha: <?=$r['fecha']?><br>
Monto: <?=number_format($r['monto'])?><br>
Estado: <?=estadoo($r['estado'])?><br>


<table class ="table table-striped">

<tr>
    <th>Marca Del Vehiculo</th>
    <th>Cantidad</th>
    <th>Monto</th>
    <th>Monto Total</th>

</tr>
<?php
$sp=$mysqli->query("SELECT * FROM productos_compra WHERE id_compra= '$id'");
while ($rp=mysqli_fetch_array($sp)){
    $monto_total = $rp['monto']*$rp['cantidad'];
    $spro = $mysqli->query("SELECT * FROM vehiculos WHERE id='".$rp['id_producto']."'");
    $rpro = mysqli_fetch_array($spro);
    $nombre_producto= $rpro['marca'];
    ?>
    <br>
    <tr>
    <td><?=$nombre_producto?></td>
    <td><?=$rp['cantidad']?></td>
    <td><?=number_format($rp['monto'])?></td>
    <td><?=number_format($monto_total)?></td>
</tr>
    <?php
}
?>


</table>

