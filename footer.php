        <span class="ir-arriba icon-arrow-up2"></span>
        <footer class="app-footer">
           <div class="container">
               <div class="row">
                   <div role="navegation" class="col-xs-12 col-sm-4 col-md-4 app-menu-footer text-center">
                        <ul>
                            <li><a href="/politica-de-privacidad/">Política de precios y privacidad</a></li>
                        </ul>

                   </div>
                   <div role="navigation" class="col-xs-12 col-sm-8 col-md-8 app-menu-footer text-center">
                        <ul class="list-inline">
                            <li><a href="/quienes-somos/">QUIENES SOMOS</a></li>
                            <li><a href="/repuestos/">REPUESTOS</a></li>
                            <li><a href="/talleres-autorizados/">TALLERES</a></li>
                            <li class="solo-movil"><a href="/salas-de-venta/">SALAS DE VENTA</a></li>
                        </ul>
                   </div>

               </div>
           </div>
        </footer>
        
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>        
        
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="/wp-content/themes/Masesa-2016/js/main-1.01.js"></script>
        <script src="/wp-content/themes/Masesa-2016/js/vendor/scrollreveal.min.js"></script>

        <?php 
            /**
             *  Si es la página de contacto llamo el script para detectar nevegador, etc
             */
            if ( is_page(34) ){
                echo "<script src='http://static.masesa.com/wp-content/themes/Masesa/js/jquery.browser.min.js'></script>";
            }


            // Convierte los tabs en acordeon para ciertas páginas
            if ( is_page (2381) || is_page (74) || is_page (185) ){

                echo '
                    <script src="/wp-content/themes/Masesa-2016/js/vendor/bootstrap-tabcollapse.js"></script>
                    <script>
                        $("#tabs").tabCollapse();
                    </script>
                    ';        
            }
 
        ?>
    </body>
</html>