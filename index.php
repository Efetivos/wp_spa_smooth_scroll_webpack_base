<!DOCTYPE html><html><head><meta http-equiv="Content-Type" content="text/html;charset=UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><meta http-equiv="X-UA-Compatible" content="ie=edge"><meta name="theme-color" content="#000000"><title><?php    if(is_front_page())
       echo "Home";
   else if(is_404())
       echo "Page Not Found";
   else if(is_category() || is_search() )
       echo single_cat_title();
   else
       the_title();
   echo ' | '.get_bloginfo('name');  
?></title><link link href="https://fonts.googleapis.com/css2?family=Fira+Sans+Extra+Condensed:wght@500&amp;display=swap" rel="stylesheet"><link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/app.css"><?php wp_head(); ?></head><body <?php body_class(); ?>><?php include 'includes/mymenu.php'; ?>
<?php include 'includes/minicart.php'; ?><div class="e-wvw e-rel" id="barba-wrapper" data-scroll><!-- init foooter--></div></body></html>