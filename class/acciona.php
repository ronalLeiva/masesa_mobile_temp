<?php

require_once 'Procesa.class.php';

if ( !empty($_POST) ){

    $procesa    = new Procesa();
    // Compruebo que los campos mandatorios no vayan sin responder
    $compruebo  = $procesa->comprueboCampos($_POST,['Nombre','Apellido','Telefono','Comentarios','Pais','Moto']);

    // Si compruebo devuelve null significa que los datos enviados son correctos
    // Si no guardo la respuesta y la imprimo.

    if ( $compruebo == NULL ){

        // Si todos los datos obligatorios han sido introducidos proceso la información
        $comprueboDatos = $procesa->datos($_POST);

        // Luego de procesado los datos, si recibo un confirma quiere decir que todo esta ok y procedo a imprimir el mensaje
        if ( $comprueboDatos['tipo'] == 'confirma'){

            return 'Hemos recibido su mensaje con exito';

        } else {

            // Respuesta despues de envio de email y almacenamiento en BD
            $respuestaTipo = $comprueboDatos['tipo'];
            $respuestaMsg  = "Al parecer ha habido un error con el mensaje, por favor intenta nuevamente.";

            return $respuestaMsg;
        }


    }else{

        // Si existe algún dato sin introducir, imprimo un mensaje de error
        $respuestaTipo  = $compruebo['tipo'];
        $respuestaMsg   = $compruebo['mensaje'];

    }

}