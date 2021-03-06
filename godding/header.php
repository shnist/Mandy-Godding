<!DOCTYPE html>

<html <?php language_attributes(); ?>>
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset'); ?>" />
  <meta name="description" content="We are a long established dedicated Theatre Arts School located in the centre of Gloucester,
  offering a range of dance and singing lessons. With over 25 years experience, we offer a comprehensive education in the performing arts. " >
  <title>
    <?php
      /*
      * Print the <title> tag based on what is being viewed.
      */
      global $page, $paged;
      wp_title( '|', true, 'right' );
      // Add the blog name.
      bloginfo( 'name' );
      // Add the blog description for the home/front page.
      $site_description = get_bloginfo( 'description', 'display' );
      if ( $site_description && ( is_home() || is_front_page() ) ){
        echo " | $site_description";
      }
      // Add a page number if necessary:
      if ( $paged >= 2 || $page >= 2 ){
        echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );
      }
    ?>
    </title>
    <!-- favicon -->
    <link rel="shortcut icon" href="/wp-content/themes/godding/_images/site_favicon.ico" />
    <!-- styles -->
    <link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <link rel="stylesheet" href="/wp-content/themes/godding/_css/mobile.css" media="screen and (max-device-width:480px)" >
    <link rel="stylesheet" href="/wp-content/themes/godding/_css/ionicons.css" media="screen" >
    <link rel="stylesheet" href="/wp-content/themes/godding/_css/slick.css" media="screen" >
    <link rel="stylesheet" href="/wp-content/themes/godding/_css/slick-theme.css" media="screen" >
    <link rel="stylesheet" href="/wp-content/themes/godding/_css/print.css" media="print" >

    <link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url'); ?>" title="<?php printf( __( '%s latest posts', 'godding' ), wp_specialchars( get_bloginfo('name'), 1 ) ); ?>" />
    <link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php printf( __( '%s latest comments', 'godding' ), wp_specialchars( get_bloginfo('name'), 1 ) ); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>

    <!-- google analytics -->
    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-17888721-1']);
      _gaq.push(['_trackPageview']);
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>
    <?php
      /* Always have wp_head() just before the closing </head>
        * tag of your theme, or you will break many plugins, which
        * generally use this hook to add elements to <head> such
        * as styles, scripts, and meta tags.
        */
      wp_head();
    ?>
  </head>
  <body>
    <!-- facebook integration -->
    <div id="fb-root"></div>
    <script>
      (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.5&appId=801634389905442";
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>

    <header>
      <?php include ('blocks/logo.php'); ?>
      <a href="/">
        <img id="mgtaLogo" src="/wp-content/themes/godding/_images/title.png" alt="Mandy Godding's Theatre Arts Logo">
      </a>
      <?php include ('blocks/primary_nav.php'); ?>
    </header>
