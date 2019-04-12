<?php
check_admin();


if (isset($enviar)){ //cuando precionen enviar
    
    $marca = clear($marca);
    $modelo=clear($modelo); 
    $uso = clear($uso);
    $anio=clear($anio); 
    $descripcion = clear($descripcion);
    $precio=clear($precio); 
    $imagen="";
    
    if(is_uploaded_file($_FILES['imagen']['tmp_name'])){
    
        $imagen=$marca.rand(0,1000).".png";
        move_uploaded_file($_FILES['imagen']['tmp_name'], "../config/vehiculos/".$imagen);
    }

   $mysqli->query("INSERT INTO vehiculos (marca,modelo,estado,imagen,anio,descripcion,precio) VALUES ('$marca','$modelo','$uso','$imagen','$anio','$descripcion','$precio')");
    alert("Vehiculo Agregado!");
    redir("?=agregar_producto");
  }
  
?>


<form method="post" action="" enctype="multipart/form-data" style="margin-left:20%; margin-right:20%; margin-top:10%" >
<span class="border">
    <div class="form-group">
    <select class="custom-select" name="marca" >
    
            <option value="0">-</option><option value="Acura">Acura</option><option value="Audi">Audi</option><option value="Bentley">Bentley</option><option value="BMW">BMW</option><option value="Brilliance">Brilliance</option><option value="Buick">Buick</option><option value="BYD">BYD</option><option value="Changan">Changan</option><option value="Chery">Chery</option><option value="Chevrolet">Chevrolet</option><option value="Chrysler">Chrysler</option><option value="Citroen">Citroen</option><option value="Daewoo">Daewoo</option><option value="Daihatsu">Daihatsu</option><option value="Dodge">Dodge</option><option value="Dongfeng">Dongfeng</option><option value="Ferrari">Ferrari</option><option value="Fiat">Fiat</option><option value="Ford">Ford</option><option value="Foton">Foton</option><option value="Gac Gonow">Gac Gonow</option><option value="Honda">Honda</option><option value="Hummer">Hummer</option><option value="Hyundai">Hyundai</option><option value="Infiniti">Infiniti</option><option value="Isuzu<">Isuzu</option><option value="Jac">Jac</option><option value="Jaguar">Jaguar</option><option value="Jeep">Jeep</option><option value="Jin-Bei">Jin-Bei</option><option value="JMC">JMC</option><option value="Kia">Kia</option><option value="Lamborghini">Lamborghini</option><option value="Land Rover">Land Rover</option><option value="Lexus">Lexus</option><option value="Lincoln">Lincoln</option><option value="Luxgen">Luxgen</option><option value="Maserati">Maserati</option><option value="Maxus">Maxus</option><option value="Maybach">Maybach</option><option value="Mazda">Mazda</option><option value="McLaren">McLaren</option><option value="Mercedes-Benz">Mercedes-Benz</option><option value="Mercury">Mercury</option><option value="Mitsubishi">Mitsubishi</option><option value="Nissan">Nissan</option><option value="Peugeot">Peugeot</option><option value="Pontiac">Pontiac</option><option value="Porsche">Porsche</option><option value="Renault">Renault</option><option value="Rolls Royce">Rolls Royce</option><option value="Samsung">Samsung</option><option value="Shineray">Shineray</option><option value="Smart">Smart</option><option value="SsangYong">SsangYong</option><option value="Subaru">Subaru</option><option value="Suzuki">Suzuki</option><option value="Toyota">Toyota</option><option value="Volkswagen">Volkswagen</option>

  </select>
</div>
<div class="form-group">
        <input type="text" class="form-control" name="modelo" placeholder="Modelo del vehículo">
</div>
<div class="form-group">
<select class="custom-select" name="uso" >
    
    <option value="Nuevo">Nuevo</option>
    <option value="Medio Uso">Medio Uso</option>
    <option value="Usado">Usado</option>
  </select>
</div>

<label class="label">Imagen del Vehiculo</label>
<div class="form-group">
<input type="file" class="form-control" name="imagen" tittle="Imagen del Vehiculo" placeholder="Imagen" required>
</div>

<div class="form-group">
<select class="custom-select" name="anio" >
    
<option value="2019">2019</option>
<option value="2018">2018</option>
<option value="2017">2017</option>
<option value="2016">2016</option>
<option value="2015">2015</option>
<option value="2014">2014</option>
<option value="2013">2013</option>
<option value="2012">2012</option>
<option value="2011">2011</option>
<option value="2010">2010</option>
<option value="2009">2009</option>
<option value="2008">2008</option>
<option value="2007">2007</option>
<option value="2006">2006</option>
<option value="2005">2005</option>
<option value="2004">2004</option>
<option value="2003">2003</option>
<option value="2002">2002</option>
<option value="2001">2001</option>
<option value="2000">2000</option>
<option value="1999">1999</option>
<option value="1998">1998</option>
<option value="1997">1997</option>
<option value="1996">1996</option>
<option value="1995">1995</option>
<option value="1994">1994</option>
<option value="1993">1993</option>
<option value="1992">1992</option>
<option value="1991">1991</option>
<option value="1990">1990</option>
<option value="1989">1989</option>
<option value="1988">1988</option>
<option value="1987">1987</option>
<option value="1986">1986</option>
<option value="1985">1985</option>
<option value="1984">1984</option>
<option value="1983">1983</option>
<option value="1982">1982</option>
<option value="1981">1981</option>
<option value="1980">1980</option>
<option value="1979">1979</option>
<option value="1978">1978</option>
<option value="1977">1977</option>
<option value="1976">1976</option>
<option value="1975">1975</option>
  </select>
</div>
<div class="form-group">
<textarea class="form-control" name="descripcion" rows="3" placeholder="breve descripcion del vehiculo"></textarea>
</div>
<div class="form-group">
        <input type="int" class="form control" name="precio" placeholder="Precio del vehículo">
</div>
<div class="form-group">
        <button type="submit" class="btn btn-success" name="enviar" >Agregar</button>
</div>


</span>
</form>
<?php
?>