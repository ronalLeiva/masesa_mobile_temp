<?php get_header(); ?>
        <section class="app-contenido">
            <div class="container app-motos">
                <div class="row">
                    <div class="col-xs-12">
                        <h1>Resultados de la busqueda</h1>
                        <h2>
                         	La busqueda de: "<span class="ressearch">
	                         	<?php 
	                         		$allsearch = &new WP_Query("s=$s&showposts=-1"); 
	                         		$key = wp_specialchars($s, 1); 
	                         		$count = $allsearch->post_count;
	                         		_e(''); _e('<span class="search-terms">');
	                         		echo $key; _e('</span>');
	                         		echo '</span>"<span class="ressearch">';
	                         		_e(' Ha devuelto &#8211; '); 
	                         		echo $count . ' '; 
	                         		_e('&#8211; resultados');
	                         		 wp_reset_query(); 
	                         	?>
	                        </span>
	                    </h2>
                    </div>
                </div>
	<?php

		if ( have_posts() ) :
			while (have_posts()) : the_post();

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
                <?php endwhile; ?>
    		<?php endif; ?>
            </div>
        </section>
<?php get_footer(); ?>