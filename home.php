<!DOCTYPE html><html><head><meta http-equiv="Content-Type" content="text/html;charset=UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><meta http-equiv="X-UA-Compatible" content="ie=edge"><meta name="theme-color" content="#000000"><title><?php    if(is_front_page())
       echo "Home";
   else if(is_404())
       echo "Page Not Found";
   else if(is_category() || is_search() )
       echo single_cat_title();
   else
       the_title();
   echo ' | '.get_bloginfo('name');  
?></title><?php  //Template Name: Home
?><link link href="https://fonts.googleapis.com/css2?family=Fira+Sans+Extra+Condensed:wght@500&amp;display=swap" rel="stylesheet"><link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/app.css"><?php wp_head(); ?></head><body <?php body_class(); ?>><?php include 'includes/mymenu.php'; ?>
<?php include 'includes/minicart.php'; ?><div class="e-wvw e-rel" id="barba-wrapper" data-barba="wrapper" data-scroll><div class="barba-container page-home e-wp" data-barba="container" data-barba-namespace="home" data-scroll-content><header class="e-wvw e-hvh e-flex-col"><h1 class="e-sans">SOTD</h1><h1 class="t-medium">SOTD</h1><h1 class="e-serif">SOTD</h1><h1 class="t-bold">SOTD</h1></header><div class="e-wvw e-flex-col e-hvh"><img class="img-load e-wp e-hp" src="https://unsplash.it/1921" alt=""></div><div class="e-wvw e-flex-col e-hvh e-flex"><a href="<?php echo get_site_url(); ?>/about"> <h1 class="t-regular">Go to about</h1></a></div><?php include 'includes/myfooter.php'; ?></div><!-- init foooter--></div></body></html>