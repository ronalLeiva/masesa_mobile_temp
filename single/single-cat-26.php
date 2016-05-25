<?php get_header(); ?>
	<?php while(have_posts()) : the_post(); ?>
        <section class="app-contenido text-justify">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="cont-blog">
                           <h1><?php the_title(); ?></h1>
                           <div class="prod-social">
                               <!-- Google -->

                               <div class="g-plus" data-action="share" data-annotation="bubble" data-href="<?php the_permalink(); ?>"></div>

                               <div class="fb-share-button" data-href="<?php the_permalink(); ?>" data-layout="button_count" data-mobile-iframe="true"></div>
                               <!-- twitter -->
                               <a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php the_permalink(); ?>" data-via="masesamotos" data-related="masesamotos" data-hashtags="masesamotos" data-dnt="true">Tweet</a>

                           </div>
                           <?php the_content(); ?>
                        </div>
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