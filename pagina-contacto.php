<?php
/*
Template Name: Página de contacto
*/
?>
<?php get_header(); ?>
        <section class="app-contenido text-justify">
            <div class="container">
                <div class="row">
                    <h1>Formulario de contacto</h1>
                    <div class="formulario">
                        <form action="" method="post" id="contacto">
                            <input type="text" name="Nombre" placeholder="Ingresa ambos nombres" autofocus tabindex="1" required autocomplete='off'>
                            <input type="text" name="Apellido" placeholder="Ingresa ambos apellidos" tabindex="2" required autocomplete='off'>
                            <input type="email" name="Email" placeholder="Correo electrónico válido" tabindex="3" autocomplete='off' required>
                            <input type="tel" name="Telefono" pattern="[0-9 ]*" placeholder="Teléfono: 23244400 sin espacios ni guiones" tabindex="4" required autocomplete='off' maxlength="9">

                            <select name="Pais" id="Pais" tabindex="5" required>
                                <option value="" selected="selected">Selecciona el país</option>
                                <option value="Guatemala" idPais="GT">Guatemala</option>
                                <option value="El Salvador"  idPais="SV">El Salvador</option>
                                <option value="Honduras"  idPais="HN">Honduras</option>
                                <option value="Nicaragua"  idPais="NI">Nicaragua</option>
                                <option value="Costa Rica" idPais="CR">Costa Rica</option>
                                <option value="México" idPais="MX">México</option>
                                <option value="Otro" idPais="OT">Otro</option>

                            </select>

                            <select name="Asunto" id="Asunto" tabindex="8" required>
                                <option value="" selected="selected">¿Cuál es el asunto de tu mensaje?</option>
                                <option value="Moto nueva">Cotizar moto nueva</option>
                                <option value="Moto usada">Cotizar moto usada</option>
                                <option value="Accesorio">Cotizar accesorio</option>
                                <option value="Repuesto">Cotizar repuesto</option>
                                <option value="Reclamo">Presentar un reclamo</option>
                                <option value="Placas">Consulta sobre trámite de placa</option>
                                <option value="Otros">Otro tema</option>
                            </select>
                            <textarea id="Comentarios" name="Comentarios" placeholder="¿Deseas agregar algún comentario?" tabindex="11" required></textarea>

                                <div class="opaco">
                                    <div class="loading"><img src="/img/loader.gif" alt=""></div>
                                    <div class="msg <?php if (isset($respuestaTipo)){ echo $respuestaTipo; }?>">
                                        <?php
                                            if ( isset($respuestaMsg) ){
                                                echo $respuestaMsg;
                                            }
                                        ?>
                                        <span class="exit"><img src="/img/close.png" alt=""></span>
                                        <span class="respuesta"></span>
                                    </div>
                                </div>

                            <button type="button" class="btn btn-success" id="btn-contacto"tabindex="12">Enviar mensaje</button>
                            <input type="hidden" name="Formulario" value="Web-Masesa">
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
<?php get_footer(); ?>