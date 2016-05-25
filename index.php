<?php
/**
 * Creado por Junior Leiva
 * Masesa 2016
 */

get_header(); ?>
        
        <?php get_template_part( 'slider'); ?>

        <section class="app-marcas">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-offset-0 col-sm-4 col-md-4 center">
                            <a href="/marca/bajaj/">
                                <div class="cuadro bajaj">
                                       <img src="/wp-content/themes/Masesa-2016/img/logo-bajaj-or.png" alt="" class="img-responsive">
                                </div>
                            </a>
                        </div>
                        <div class="col-xs-12 col-sm-offset-0 col-sm-4 col-md-4 center">
                            <a href="/marca/yumbo/">
                                <div class="cuadro yumbo">
                                    <img src="/wp-content/themes/Masesa-2016/img/logo-yumbo-or.png" alt="" class="img-responsive">
                                </div>
                            </a>
                        </div>
                        <div class="col-xs-12 col-sm-offset-0 col-sm-4 col-md-4 center">
                            <a href="/marca/ktm/">
                                <div class="cuadro ktm">
                                    <img src="/wp-content/themes/Masesa-2016/img/logo-ktm-or.png" alt="" class="img-responsive">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
        </section>
        <section class="app-secciones">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-8 ubicaciones">
                        <a href="/salas-de-venta/">
                            <img src="/wp-content/themes/Masesa-2016/img/ubicaciones-masesa.png" alt="" class="img-responsive" width="750">
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 sectores">
                        <div class="manuales">
                           <a href="/manuales-tecnicos-motocicletas-bajaj-yumbo/">
                               <img src="/wp-content/themes/Masesa-2016/img/manuales.png" alt="Manuales" class="img-responsive">
                           </a>
                        </div>
                        <div class="blog">
                            <a href="/blog/">
                                <img src="/wp-content/themes/Masesa-2016/img/blog.png" alt="El Blog" class="img-responsive">
                            </a>
                        </div>
                        <div class="talleres">
                           <a href="/talleres-autorizados/">
                               <img src="/wp-content/themes/Masesa-2016/img/talleres.png" alt="Talleres" class="img-responsive">
                           </a>
                        </div>
                    </div>
                    </div>
            </div>
        </section>
<?php get_footer(); ?>