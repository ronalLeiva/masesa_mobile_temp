<?php get_header(); ?>
        <section class="app-contenido">
            <div class="container app-motos">
                <div class="row">
                    <div class="col-xs-12">
                        <h1>Nuestras motos</h1>
                    </div>
                </div>
	<?php

		$additional_loop = new WP_Query('cat=3&showposts=30');
		if ( have_posts() ) :
			while ($additional_loop->have_posts()) : $additional_loop->the_post();

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