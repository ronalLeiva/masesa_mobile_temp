<?php get_header(); ?>
	<section class="app-contenido text-justify">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="cont-page">
                    <?php while(have_posts()) : the_post(); ?>
                    	<h1><?php the_title(); ?></h1>
                    	<?php the_content(); ?>
                    <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>