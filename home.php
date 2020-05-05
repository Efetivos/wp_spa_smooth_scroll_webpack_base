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
$our_approach = get_field('our_approach');
?><link link href="https://fonts.googleapis.com/css2?family=Fira+Sans+Extra+Condensed:wght@500&amp;display=swap" rel="stylesheet"><link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/app.css"><?php wp_head(); ?></head><body <?php body_class(); ?>><?php include 'includes/mymenu.php'; ?>
<?php include 'includes/minicart.php'; ?><div class="e-wvw e-rel" id="barba-wrapper" data-scroll><div class="barba-container page-home e-wp" data-namespace="home" data-scroll-content><header class="e-wvw e-hvh e-flex-col"><h1 class="e-serif e-upper"><?=$our_approach['text']['title']?> (title)</h1><h1 class="t-italic"><?=$our_approach['text']['title']?> (italic)</h1><h1 class="t-regular"><?=$our_approach['text']['title']?> (regular)</h1><h1 class="t-bold"><?=$our_approach['text']['title']?> (bold)</h1><h1 class="e-sans"><?=$our_approach['text']['title']?> (standard)</h1><a href="<?php echo get_site_url(); ?>/our-initiatives"> <h1 class="t-regular">Our Initiatives</h1></a></header><header class="e-wvw e-hvh e-flex-col"><h1 class="e-serif e-upper"><?=$our_approach['text']['title']?></h1><h1 class="t-italic"><?=$our_approach['text']['title']?></h1><h1 class="t-regular"><?=$our_approach['text']['title']?></h1><h1 class="t-bold"><?=$our_approach['text']['title']?></h1><h1 class="e-sans"><?=$our_approach['text']['title']?></h1><!--h1.e-sans.t-white <?=$our_approach['text']['body']?>--></header><?php include 'includes/myfooter.php'; ?></div><!-- init foooter--></div></body></html>