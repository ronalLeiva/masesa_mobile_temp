<?php get_header(); ?>
        <section class="app-contenido">
            <div class="container app-motos">
                <div class="row">
                    <div class="col-xs-12">
                        <h1>Moto tipo scrambler</h1>
                        <div class="dropdown">
                            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Filtro por tipo
                                <span class="caret"></span>
                            </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <li><a href="/tipo/cuatrimoto/">Cuatrimoto</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="/tipo/scooter/">Scooter</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="/tipo/scrambler/">Scrambler</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="/tipo/cargo/">Para carga</a></li>
                                </ul>
                        </div>
                        <div class="btn-group btn-group-lg clearfix" role="group" aria-label="Categorías">
                          <button type="button" class="btn btn-secondary"  onclick="window.location='http://masesa.com/tipo/cuatrimoto/'">Cuatrimoto</button>
                          <button type="button" class="btn btn-secondary"  onclick="window.location='http://masesa.com/tipo/scooter/'">Scooter</button>
                          <button type="button" class="btn btn-secondary"  onclick="window.location='http://masesa.com/tipo/scrambler/'">Scrambler</button>
                          <button type="button" class="btn btn-secondary"  onclick="window.location='http://masesa.com/tipo/cargo/'">Para carga</button>
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