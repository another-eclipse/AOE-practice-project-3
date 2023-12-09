<?php

wp_footer();

?>
<footer>
    <div id="footer">
<div class="logo footer-item" >
        <?php
        if(function_exists('the_custom_logo')){
            the_custom_logo();
        }
        ?>
    </div>
    <div class="footer-item">
        <h3>Address</h3>
        <div class="footer-content">
        <img class="thumbnail" size="icon" src="<?php echo get_template_directory_uri(); ?> /assets/images/physical_location.svg" />
        <span><?php echo get_field('physical_address', 'option'); ?></span>
        </div>
    </div>
    <div class="footer-item">
        <div>
        <h3>Let's talk</h3>
        <div class="footer-content">
            <div>
        <img class="thumbnail" size="icon" src="<?php echo get_template_directory_uri(); ?> /assets/images/telephone.svg" />
        <span><?php echo get_field('phone_number', 'option'); ?></span>
        </div>
        <div>
        <img class="thumbnail" size="icon" src="<?php echo get_template_directory_uri(); ?> /assets/images/email.svg" /><span><?php echo get_field('company_email', 'option'); ?></span>
        </div>
        </div>
    </div>
        <div class="socials">
        <a href="<?php echo get_field('facebook_page', 'option'); ?>"><i><img class="thumbnail" size="icon" src="<?php echo get_template_directory_uri(); ?> /assets/images/facebook_icon.png" /></i></a>
        <a href="<?php echo get_field('instagram_page', 'option'); ?>"><img class="thumbnail" src="<?php echo get_template_directory_uri(); ?> /assets/images/instagram_icon.png" /></a>
        <a href="<?php echo get_field('twitter_page', 'option'); ?>"> <img class="thumbnail" src="<?php echo get_template_directory_uri(); ?> /assets/images/twitter_icon.png" /></a>
        <a href="<?php echo get_field('pinterest_page', 'option'); ?>"><img class="thumbnail" src="<?php echo get_template_directory_uri(); ?> /assets/images/pinterest_icon.svg" /></a>
        
        </div>
    </div >
<div id="footer_menu" class="footer-item">
<h3>Company</h3>
    <?php
    wp_nav_menu(
        array(
            'menu' => 'footer',
            'container' => 'footer_menu',
            'theme_location' => 'footer',
            'items_wrap' => '<ul class="foot-item navbar-nav flex-column text-sm-center text-md-left">%3$s</ul>'
        )
    )
    ?>
    </div>
    </div>

    <div class="footer-meta">
        <span class="footer-meta-item"><?php echo get_field('copyright', 'options'); ?></span>
        <span class="footer-meta-item"><?php echo get_field('design', 'options'); ?></span>
    </div>
</footer>


<script type="module" >
  import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.mjs'

  const swiper = new Swiper('.swiper', {
  // Optional parameters
  loop: true,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  // And if we need scrollbar
  scrollbar: {
    el: '.swiper-scrollbar',
  },
});


</script>

    
</body>
</html>