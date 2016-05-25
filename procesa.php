<?php
//  TALLERES
if(isset($_POST["id_pais"]))
	{
		$opciones = '<option value="0">Elige un estado</option>';

		$cn = new mysqli("localhost","masesaco_prod","masesaguatemala12345","masesaco_produccion",3306);
		$strConsulta = "SELECT DISTINCT (t.id_estado),e.estado FROM masesa_talleres t, masesa_estados e WHERE t.id_estado = e.id_estado AND e.id_pais='".$_POST["id_pais"]."'";		
		$result = $cn->query($strConsulta);

		while( $fila = $result->fetch_array() )
		{
			$opciones.='<option value="'.$fila["id_estado"].'">'.$fila["estado"].'</option>';
		}
		mysqli_close($cn);
		echo $opciones;
	}

if(isset($_POST["id_estado"]))
	{
		$opciones = '<option value="0">Elige una ciudad</option>';

		$cn = new mysqli("localhost","masesaco_prod","masesaguatemala12345","masesaco_produccion",3306);
		$strConsulta = "SELECT DISTINCT (t.id_ciudad),c.ciudad FROM masesa_talleres t, masesa_ciudades c WHERE t.id_ciudad = c.id_ciudad AND c.id_estado='".$_POST["id_estado"]."'";
		
		$result = $cn->query($strConsulta);
		

		while( $fila = $result->fetch_array() )
		{
			$opciones.='<option value="'.$fila["id_ciudad"].'">'.$fila["ciudad"].'</option>';
		}
		mysqli_close($cn);
		echo $opciones;
	}	

if(isset($_POST["id_ciudad"]))
	{
		$cn = new mysqli("localhost","masesaco_prod","masesaguatemala12345","masesaco_produccion",3306);
		$strConsulta = "SELECT t.nombre,t.direccion, CONCAT(telefono1,'&nbsp;&nbsp;&nbsp;',telefono2,'&nbsp;&nbsp;&nbsp;',telefono3) tels FROM masesa_talleres t WHERE t.id_ciudad ='".$_POST["id_ciudad"]."'";
		$result = $cn->query($strConsulta);
		
		$envia = "<table class='resultante'>";
		$envia.= "<thead><tr><th width='355'>Nombre del taller</th><th width='420'>Dirección</th><th width='185'>Teléfonos</th></tr></thead><tbody>";
		
		$cuenta = 0;
		while( $fila = $result->fetch_array() )
		{
			$cuenta ++;
			$par = $cuenta%2;			
			$envia.='<tr class='; if($par==0){$envia.='odd';}   $envia.='><td>'.$fila["nombre"].'</td><td>'.$fila["direccion"].'</td><td>'.$fila["tels"].'</td></tr>';
		}
		mysqli_close($cn);
		$envia .="</tbody></table>";
		echo $envia;
	}	
// DISTRIBUIDORES

if(isset($_POST["id_paisd"]))
	{
		$opciones = '<option value="0">Elige un estado</option>';

		$cn = new mysqli("localhost","masesaco_prod","masesaguatemala12345","masesaco_produccion",3306);
		$strConsulta = "SELECT DISTINCT (d.id_estado),e.estado FROM masesa_distribuidores d, masesa_estados e WHERE d.id_estado = e.id_estado AND e.id_pais='".$_POST["id_paisd"]."'";		
		$result = $cn->query($strConsulta);

		while( $fila = $result->fetch_array() )
		{
			$opciones.='<option value="'.$fila["id_estado"].'">'.$fila["estado"].'</option>';
		}
		mysqli_close($cn);
		echo $opciones;
	}

if(isset($_POST["id_estadod"]))
	{
		$opciones = '<option value="0">Elige una ciudad</option>';

		$cn = new mysqli("localhost","masesaco_prod","masesaguatemala12345","masesaco_produccion",3306);
		$strConsulta = "SELECT DISTINCT (d.id_ciudad),c.ciudad FROM masesa_distribuidores d, masesa_ciudades c WHERE d.id_ciudad = c.id_ciudad AND c.id_estado='".$_POST["id_estadod"]."'";
		
		$result = $cn->query($strConsulta);
		

		while( $fila = $result->fetch_array() )
		{
			$opciones.='<option value="'.$fila["id_ciudad"].'">'.$fila["ciudad"].'</option>';
		}
		mysqli_close($cn);
		echo $opciones;
	}	

if(isset($_POST["id_ciudadd"]))
	{
		$cn = new mysqli("localhost","masesaco_prod","masesaguatemala12345","masesaco_produccion",3306);
		$strConsulta = "SELECT d.nombre,d.direccion, CONCAT(telefono1,'&nbsp;&nbsp;&nbsp;',telefono2,'&nbsp;&nbsp;&nbsp;',telefono3) tels FROM masesa_distribuidores d WHERE d.id_ciudad ='".$_POST["id_ciudadd"]."'";
		$result = $cn->query($strConsulta);
		
		$envia = "<table class='resultante'>";
		$envia.= "<thead><tr><th width='355'>Nombre del distribuidor</th><th width='420'>Dirección</th><th width='185'>Teléfonos</th></tr></thead><tbody>";
		
		$cuenta = 0;
		while( $fila = $result->fetch_array() )
		{
			$cuenta ++;
			$par = $cuenta%2;			
			$envia.='<tr class='; if($par==0){$envia.='odd';}   $envia.='><td>'.$fila["nombre"].'</td><td>'.$fila["direccion"].'</td><td>'.$fila["tels"].'</td></tr>';
		}
		mysqli_close($cn);
		$envia .="</tbody></table>";
		echo $envia;
	}		
		
?>