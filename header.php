<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="<?php echo get_bloginfo( 'description' ); ?>">
        <meta name="author" content="">
        <meta name="HandheldFriendly" content="true" />
    
        <title><?php echo get_bloginfo( 'name' ); ?></title>
        <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/normalize.min.css">
        <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/lateef.css">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <?php wp_head();?>

        <!-- Type kit fonts http://www.typekit.com -->
        <script src="https://use.typekit.net/hhl1seb.js"></script>
        <script>try{Typekit.load({ async: true });}catch(e){}</script>

    </head>

    <body>
        <!-- header starts here --> 
        <header>

            <div class="wrapper">

                <div class="logo">
                    <h1>
                        <a href="<?php bloginfo('wpurl');?>"><?php echo get_bloginfo( 'name' ); ?></a>
                    </h1>
                </div>

                <nav>
                    <div class="menu">
                    <button class="hamburger hamburger--squeeze" type="button">
                      <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                      </span>
                    </button>
                    </div>
                    
                    <div class="overlay hidden is-inactive">

                        <ul class="main-navigation">
                            <li><a href="">Search</a></li>
                            <?php wp_list_pages( '&title_li='); ?>
                            <!--li><a href="">Search</a></li>
                            <li><a href="">Archive</a></li>
                            <li><a href="">About</a></li-->
                        </ul>

                         <ul class="topics">
                            <li>Topics</li>
                            <li><a href="">All</a></li>
                            <li><a href="">Style</a></li>
                            <li><a href="">Travel</a></li>
                            <li><a href="">Politics</a></li>
                        </ul>

                        <ul class="social">
                            <li>Connect</li>
                            <li><a href="https://twitter.com/LateefSaka">Twitter</a></li>
                            <li><a href="https://www.instagram.com/lateefsaka/">Instagram</a></li>
                            <li><a href="">Email me</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <!-- header ends here --> 