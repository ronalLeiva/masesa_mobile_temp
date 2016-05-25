<?php

require_once 'Procesa.class.php';
// Capturo variables Ajax

if ( !empty( $_POST["accion"] ) ){ 
     $accion  = $_POST["accion"];
   
    // Traer Estado
    if( $accion == 'traerEstado'){

        $idPais = $_POST['idpais'];
        $traigo    = new Procesa();
        $traigo  = $traigo->consultoEstado($idPais);

        $salidaJson = json_encode($traigo);
        print $salidaJson;
    }
    
    // Traer Municipio
    if( $accion == 'traerMunicipio'){

        $idEstado = $_POST['idestado'];
        $traigo    = new Procesa();
        $traigo  = $traigo->consultoMunicipio($idEstado);
        
        $salidaJson = json_encode($traigo);
        print $salidaJson;
    }
    
    // Traer Ciudad
    if( $accion == 'traerCiudad'){
        $idMunicipio = $_POST['idmunicipio'];
        $traigo    = new Procesa();
        $traigo  = $traigo->consultoLocalidad($idMunicipio);

        $salidaJson = json_encode($traigo);
        print $salidaJson;

    }
    
    // Traer Motos
    if( $accion == 'traerMotos'){
        $traigo     = new Procesa();
        $traigo  = $traigo->consultoMotos();
        
        $salidaJson = json_encode($traigo);
        print $salidaJson;
        
    }

    // Traer Salas de venta
    if( $accion == 'traerSalas'){
        $idCiudad = $_POST['idciudad'];
        $traigo     = new Procesa();
        $traigo  = $traigo->consultoSalas($idCiudad);
        
        $salidaJson = json_encode($traigo);
        print $salidaJson;
        
    }

    // Traer Talleres
    if( $accion == 'traerTalleres'){
        $idCiudad = $_POST['idciudad'];
        $traigo     = new Procesa();
        $traigo  = $traigo->consultoTalleres($idCiudad);
        
        $salidaJson = json_encode($traigo);
        print $salidaJson;
        
    }

} 