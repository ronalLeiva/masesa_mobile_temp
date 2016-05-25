<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta name="theme-color" content="#ffd400">
        <link rel="icon" sizes="192x192" href="/wp-content/themes/Masesa-2016/img/icon-highres.png">
        <link rel="apple-touch-icon" href="/wp-content/themes/Masesa-2016/img/apple-touch-icon.png">
        <link rel="icon" type="image/x-icon" href="/wp-content/themes/Masesa-2016/img/favicon.ico" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php wp_title( '|', true, 'right' );?></title>
        <meta property="fb:admins" content="100002144036367" />
        <meta property="fb:app_id" content="109342819153182" />
        <meta property="og:site_name" content="Motos | Masesa" />
        <meta name="description" content="<?php 
            if ( is_single() ) {
                single_post_title('', true);
            } else {
                bloginfo('name'); echo ' - '; bloginfo('description');
            }
        ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" href="/wp-content/themes/Masesa-2016/css/iconmon.css">
        <link rel="stylesheet" href="/wp-content/themes/Masesa-2016/css/main-1.01.css">
        <link href='https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,700' rel='stylesheet' type='text/css'>
        <?php 
            /**
             *  Si es la página de contacto llamo la hoja de estilos de contacto
             */
            if ( is_page(34) ){
                echo "<link rel='stylesheet' href='/wp-content/themes/Masesa-2016/css/contacto.css'>";
        
            }
        ?>
        <script src="/wp-content/themes/Masesa-2016/js/vendor/modernizr-2.8.3.min.js"></script>
        <?php
            wp_head();
        
            if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
                $ip=$_SERVER['HTTP_CLIENT_IP'];}
            elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
                $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
            } else {
                $ip=$_SERVER['REMOTE_ADDR'];
            }
        ?>
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-7222293-1', 'auto');
            ga('require', 'linkid', 'linkid.js');
            ga('send', 'pageview', {
                'dimension1':  '<?=$ip;?>'
            });

            (function(h,o,t,j,a,r){
                h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
                h._hjSettings={hjid:182016,hjsv:5};
                a=o.getElementsByTagName('head')[0];
                r=o.createElement('script');r.async=1;
                r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
                a.appendChild(r);
            })(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');
        </script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">El navegador que estas usando se encuentra <strong>obsoleto</strong>. Por favor <a href="http://browsehappy.com/">actualiza tu navegador</a> para mejorar tu experiencia de navegaci&oacute;n en los sitios web.</p>
        <![endif]-->
        <header class="app-header">
            <nav class="navbar app-navbar">
                <div class="container">
                    <div class="navbar-header">
                        <button class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                            <span class="icon-bar app-icon"></span>
                            <span class="icon-bar app-icon"></span>
                            <span class="icon-bar app-icon"></span>
                        </button>
                        <a href="/" class="navbar-brand  app-logo">
                            <img src="/wp-content/themes/Masesa-2016/img/logo-masesa.png" alt="Masesa" class="img-responsive">
                        </a>
                    </div>
                    <div class="collapse navbar-collapse" id="menu">
                        <ul class="nav navbar-nav navbar-right app-nav app-search-cont">
                            <li>
                                <?php $search_text = empty($_GET['s']) ? "Busqueda" : get_search_query();//variable $searchtext ?>
                                <form method="get" action="<?php bloginfo('home'); ?>/" class="form-search">
                                    <input type="search" class="app-search" name="s">
                                    <span class="icon-search"></span>
                                </form>
                            </li>
                        </ul>

                        <ul class="nav navbar-nav navbar-right app-nav app-social">
                            <li><a href="//facebook.com/masesa.motos" target="_new"><span class="icon-facebook app-circle"></span></a></li>
                            <li><a href="//twitter.com/masesamotos" target="_new"><span class="icon-twitter app-circle"></span></a></li>
                            <li><a href="//instagram.com/masesamotos/" target="_new"><span class="icon-instagram app-circle"></span></a></li>
                            <li><a href="//youtube.com/user/MotosMasesa" target="_new"><span class="icon-youtube app-circle"></span></a></li>
                        </ul>

                        <ul class="nav navbar-nav navbar-right app-nav app-nav-menu">
                            <li><a href="/">INICIO</a></li>
                            <li><a href="/salas-de-venta/">SALAS DE VENTAS</a></li>
                            <li><a href="/contactenos/">CONTACTENOS</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
