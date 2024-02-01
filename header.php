<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>  
    <link
    rel="stylesheet"
    type="text/css"
    href="<?php echo get_template_directory_uri(); ?>/assets/css/lsb.css"/>  
    
   

    <title>AOE Custom Theme 3</title>
    <?php
    wp_head(); 
    ?>
</head>
<nav>
    <div class="navbar" id="topheader">
        <div >
        <img class="thumbnail" size="icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/physical_location.svg" /><span class="navitem"><?php echo get_field('physical_address', 'options'); ?></span>
        <img class="thumbnail" size="icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/email.svg" /><span class="navitem"><?php echo get_field('company_email', 'options'); ?></span>
        <img class="thumbnail" size="icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/telephone.svg" /><span class="navitem"><?php echo get_field('phone_number', 'options'); ?></span>
        </div>
        <div>
        <a class="navitem" href="<?php echo get_field('facebook_page', 'option'); ?>"><i><img class="thumbnail" size="icon" src="<?php echo get_template_directory_uri(); ?> /assets/images/orange_facebook.svg" /></i></a>
        <a class="navitem" href="<?php echo get_field('instagram_page', 'option'); ?>"><img class="thumbnail" src="<?php echo get_template_directory_uri(); ?> /assets/images/orange_instragram.svg" /></a>
        </div>
</div>
</nav>
<div class="navbar" >
    <div class="logo">
        <?php
        if(function_exists('the_custom_logo')){
            the_custom_logo();
        }
        ?>
    </div>
    <div id="navmenu">
    <?php
    wp_nav_menu(
        array(
            'menu' => 'primary',
            'container' => 'navmenu',
            'theme_location' => 'primary',
            'items_wrap' => '<ul class="navitem navbar-nav flex-column text-sm-center text-md-left">%3$s</ul>'
        )
    )
    ?>
    </div>
    <div>
    <a  href="http://localhost/test/wordpress/request-a-quote/"> <button> Request a Quote </button> </a>
    </div>
        </div>
        
<header>



</header>
<body>

