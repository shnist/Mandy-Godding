<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset'); ?>" />
  <meta name="description" content="We are a long established dedicated Theatre Arts School located in the centre of Gloucester,
  offering a range of dance and singing lessons. With over 25 years experience, we offer a comprehensive education in the performing arts. ">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>
    <?php
    /*
      * Print the <title> tag based on what is being viewed.
      */
    global $page, $paged;
    wp_title('|', true, 'right');
    // Add the blog name.
    bloginfo('name');
    // Add the blog description for the home/front page.
    $site_description = get_bloginfo('description', 'display');
    if ($site_description && (is_home() || is_front_page())) {
      echo " | $site_description";
    }
    // Add a page number if necessary:
    if ($paged >= 2 || $page >= 2) {
      echo ' | ' . sprintf(__('Page %s', 'twentyten'), max($paged, $page));
    }
    ?>
  </title>
  <!-- favicon -->
  <link rel="shortcut icon" href="/wp-content/themes/godding/_images/site_favicon.ico" />
  <!-- styles -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Roboto&display=swap" rel="stylesheet">

  <!-- google analytics -->
  <script>
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-17888721-1']);
    _gaq.push(['_trackPageview']);
    (function() {
      var ga = document.createElement('script');
      ga.type = 'text/javascript';
      ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(ga, s);
    })();
  </script>
  <?php wp_head(); ?>
</head>

<body>
  <!-- facebook integration -->
  <div id="fb-root"></div>
  <script>
    (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) {
        return;
      }
      js = d.createElement(s);
      js.id = id;
      js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.5&appId=801634389905442";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
  </script>
  <header class="header" role="banner">
    <div class="brand">
      <div class="logos">
        <?php get_template_part('blocks/logo'); ?>
      </div>
      <h1 class="title">Mandy Godding's Theatre Arts</h1>
    </div>
    <?php get_template_part('blocks/primary_nav'); ?>
  </header>
