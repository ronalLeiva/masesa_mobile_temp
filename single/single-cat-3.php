<?php get_header(); ?>
	<?php while(have_posts()) : the_post(); ?>
		<section class="app-contenido text-justify">
                <div class="container">
                    <div class="row">
                       <div class="col-xs-12">
                           <h1><?php the_title(); ?></h1>
                       </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-7">
                            <div class="cont-producto">
                               <div class="app-img">
                                   <img src="<?php imagenSrc('medio'); ?>" alt="" class="img-responsive img-fluid">
                                   <div class="prod-colores">
                                   <?php
                                		$elementos = get('Productos_colores');
                                		if ($elementos != null){
                                 			foreach($elementos as $elemento){
                                    			echo "<span class='app-circle " . $elemento ."'> &nbsp;</span>";
                                    		}
                                		}
                                	?>
                                   </div>
                               </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-5">
                           <div class="prod-social">
                               <!-- Google -->

                               <div class="g-plus" data-action="share" data-annotation="bubble" data-href="<?php the_permalink(); ?>"></div>

                               <div class="fb-share-button" data-href="<?php the_permalink(); ?>" data-layout="button_count" data-mobile-iframe="true"></div>
                               <!-- twitter -->
                               <a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php the_permalink(); ?>" data-via="masesamotos" data-related="masesamotos" data-hashtags="masesamotos" data-dnt="true">Tweet</a>

                           </div>
                            <table class="table table-striped prod-specs">
                               <tr>
                                   <td>Motor</td>
                                   <td><?php echo get('Productos_motor'); ?></td>
                               </tr>
                               <tr>
                                   <td>Cilindraje</td>
                                   <td><?php echo get('Productos_cilindraje'); ?></td>
                               </tr>
                               <tr>
                                   <td>Potencia máxima</td>
                                   <td><?php echo get('Productos_potencia_maxima'); ?></td>
                               </tr>
                               <tr>
                                   <td>Enfriamiento</td>
                                   <td><?php echo get('Productos_enfriamiento'); ?></td>
                               </tr>
                               <tr>
                                   <td>Combustible</td>
                                   <td><?php echo get('Productos_combustible'); ?></td>
                               </tr>
                               <tr>
                                   <td>Arranque</td>
                                   <td><?php echo get('Productos_arranque'); ?></td>
                               </tr>
                               <tr>
                                   <td>Velocidad máxima</td>
                                   <td><?php echo get('Productos_velocidad_maxima');?></td>
                               </tr>
                               <tr>
                                   <td>Transmisión</td>
                                   <td><?php echo get('Productos_transmision');?></td>
                               </tr>
                               <tr>
                                   <td>Freno delantero</td>
                                   <td><?php echo get('Productos_freno_delantero');?></td>
                               </tr>
                               <tr>
                                   <td>Freno posterior</td>
                                   <td><?php echo get('Productos_freno_posterior');?></td>
                               </tr>
                               <tr>
                                   <td>Capacidad del tanque</td>
                                   <td><?php echo get('Productos_capacidad_tanque');?></td>
                               </tr>
                               <tr>
                                   <td>Garantía</td>
                                   <td><?php echo get('Productos_garantia');?></td>
                               </tr>
                            </table>
                            <button type="button" class="btn btn-success btn-lg btn-block" onclick="window.location='http://www.masesa.com/contactenos/'">Cotiza aquí</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                        	<?php 
                        		if ( $post->post_content != null){
                            		echo "<h2>Detalles:</h2> ";
                            		the_content();
                             	}
                            ?>
                        </div>
                    </div>
                </div>

                <!-- Redes sociales  -->

                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

                <div id="fb-root"></div>
                <script>(function(d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if (d.getElementById(id)) return;
                    js = d.createElement(s); js.id = id;
                    js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.6&appId=109342819153182";
                    fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));
                </script>

                <script src="https://apis.google.com/js/platform.js" async defer>
                    {lang: 'es-419'}
                </script>
        </section>
    <?php endwhile; ?>
<?php get_footer(); ?>