<?php get_header(); ?>
        <section class="app-contenido">
            <div class="container app-motos">
                <div class="row">
                    <div class="col-xs-12">
                        <h1>Motos Pulsar</h1>
                        <div class="dropdown">
                            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Puedes filtrar
                                <span class="caret"></span>
                            </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <li><a href="/tipo/pulsar/">Motos Pulsar</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="/tipo/discover/">Motos Discover</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="/tipo/boxer/">Motos Boxer</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="/tipo/platina/">Motos Platina</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="/tipo/avenger/">Motos Avenger</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="/tipo/torito/">Torito tuk tuk</a></li>
                                </ul>
                        </div>
                        <div class="btn-group btn-group-lg clearfix" role="group" aria-label="Categorías">
                          <button type="button" class="btn btn-secondary" onclick="window.location='http://masesa.com/tipo/pulsar/'">Motos Pulsar</button>
                          <button type="button" class="btn btn-secondary" onclick="window.location='http://masesa.com/tipo/discover/'">Motos Discover</button>
                          <button type="button" class="btn btn-secondary" onclick="window.location='http://masesa.com/tipo/boxer/'">Motos Boxer</button>
                          <button type="button" class="btn btn-secondary" onclick="window.location='http://masesa.com/tipo/platina/'">Motos Platina</button>
                          <button type="button" class="btn btn-secondary" onclick="window.location='http://masesa.com/tipo/avenger/'">Motos Avenger</button>
                          <button type="button" class="btn btn-secondary" onclick="window.location='http://masesa.com/tipo/torito/'">Torito tuk tuk</button>
                        </div>
                    </div>
                </div>
	<?php

        global $query_string;
        query_posts( $query_string . '&order=ASC' );

        while(have_posts()) : the_post();

    ?>
            <a href="<?php the_permalink(); ?>">
                <div class="row my-row">
                	<div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="app-foto">
                        	<img src="<?php imagenSrc($tamano = 'medio'); ?>" alt="<?php the_title(); ?>" class="img-responsive img-fluid">
                            <div class="app-foto-caption text-center"><?php the_title(); ?></div>
                        </div>
                	</div>
                	<div class="col-xs-12 col-sm-8 col-md-8">
                    	<div class="background"><!--empty bg-div--></div>
                    	<div class="app-descripcion">
                        	<?php the_excerpt(); ?>
                        </div>
                	</div>
                </div>
            </a>
    <?php 
        endwhile;
        wp_reset_query();
    ?>
            </div>
        </section>
<?php get_footer(); ?>