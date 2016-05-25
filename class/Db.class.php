<?php

require_once 'Conexion.class.php';
class Db{

	function insertar($formulario, $ip, $datos){

		$tabla1 = 'contacto_envio';
		$tabla2 = 'contacto_dato';


		$db = new Conexion();
		$db = $db->conecta();

		$query = "INSERT INTO $tabla1 (form,ip) VALUES (:form, :ip)";

		//Preparo la inserción de la tabla de envios y la ejecuto
		$result = $db->prepare($query);
		if ($result->execute(array(":form" => $formulario, ":ip" => $ip))) {

			// Si todo va bien, entonces inserto cada campo en su propia tabla
			// Obtengo el id que acabo de insertar y lo amarro a la siguiente tabla
			$id = $db->lastInsertId('id');
			foreach ($datos as $campo => $valor) {

				$query = "INSERT INTO $tabla2 (envio_id, campo, valor) VALUES (:id, :campo, :valor)";
				$result = $db->prepare($query);

				// Ejecuto inserción en la segunda tabla
				$result->execute( array(":id" => $id, ":campo" => $campo, ":valor"=>$valor) );
			}
			return true;

		} else {

		    return false;
		}

	//cierro la conexión
	$db = null;

	}
    
    function consultoEstado($idPais){
        
        $tabla = 'masesa_estados';
        
        $db = new Conexion();
        $db = $db->conecta();
        
        $query = "SELECT id_estado, estado FROM $tabla WHERE id_pais = '$idPais' ";        
        $result = $db->prepare($query);        
        
        if ( $result->execute() ){
            
            // Meto todos los datos en un array
            $row = $result->fetchAll();
            
            // Envio el resultado
            return $row;
            
        }else{
            
            return false;
            
        }
        
        //cierro la conexión
        $db = null;
    }
    

    function consultoLocalidad($idMunicipio){

        $tabla = 'masesa_ciudades';

        $db = new Conexion();
        $db = $db->conecta();

        $query = "SELECT id_ciudad, ciudad FROM $tabla WHERE id_estado= $idMunicipio";        
        $result = $db->prepare($query);

        if ( $result->execute() ){

            // Meto todos los datos en un array
            $row = $result->fetchAll();

            // Envio el resultado
            return $row;

        }else{

            return false;

        }

        // Cierro la conexión
        $db = null;

    }
    
    function consultoMotos(){
        
        $tabla1 = 'vpjw1ai_posts';
        $tabla2 = 'vpjw1ai_term_relationships';
        
        $db = new Conexion();
        $db = $db->conecta();
        
        // Imprimo todos los modelos que estan en la BD

        $query= "
            SELECT
				producto.post_title nombre
			FROM
				$tabla1 producto, $tabla2 relacion
			WHERE
				relacion.term_taxonomy_id IN (8,9,34)
			AND
				relacion.object_id = producto.ID
			ORDER BY
				relacion.term_taxonomy_id,producto.post_title";
        
        $result = $db->prepare($query);
        
        if ( $result->execute() ){

            // Meto todos los datos en un array
            $row = $result->fetchAll();

            // Envio el resultado
            return $row;

        }else{

            return false;

        }

        // Cierro la conexión
        $db = null;        
    }

    function consultoSalas($idCiudad){

        $tabla = 'masesa_distribuidores';

        $db = new Conexion();
        $db = $db->conecta();

        $query = "SELECT nombre, direccion, CONCAT(telefono1,'&nbsp;&nbsp;&nbsp;',telefono2,'&nbsp;&nbsp;&nbsp;',telefono3) tels 
                  FROM $tabla WHERE id_ciudad= $idCiudad";


        $result = $db->prepare($query);

        if ( $result->execute() ){

            // Meto todos los datos en un array
            $row = $result->fetchAll();

            // Envio el resultado
            return $row;

        }else{

            return false;

        }

        // Cierro la conexión
        $db = null;

    }

    function consultoTalleres($idCiudad){

        $tabla = 'masesa_talleres';

        $db = new Conexion();
        $db = $db->conecta();

        $query = "SELECT nombre, direccion, CONCAT(telefono1,'&nbsp;&nbsp;&nbsp;',telefono2,'&nbsp;&nbsp;&nbsp;',telefono3) tels 
                  FROM $tabla WHERE id_ciudad= $idCiudad";

        $result = $db->prepare($query);

        if ( $result->execute() ){

            // Meto todos los datos en un array
            $row = $result->fetchAll();

            // Envio el resultado
            return $row;

        }else{

            return false;

        }

        // Cierro la conexión
        $db = null;

    }

}
