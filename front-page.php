<?php
    get_header();
    // home page data
    $hero_slider_1 = get_field('slider_1');
    $hero_slider_2 = get_field('slider_2');
    $hero_slider_3 = get_field('slider_3');
    $media_content = get_field('media_content');
    $media_with_text_columns = get_field('media_with_text_columns');
    $banner_with_text = get_field('banner_with_text');
    $image_list = get_field('image_list');
    $multiple_images_with_text = get_field('multiple_images_with_text');
    
    
?>
<meta>
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
/>
</meta>
<main>



<section>
    <!-- Slider main container -->
<div class="swiper">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide">
        <img src="<?php echo $hero_slider_1['background']; ?>" class="hero-slider__background" alt="">
                
                <h2 class="hero-slider__title">
                    <?php echo $hero_slider_1['title']; ?>
                </h2>
                <div class="hero-slider__text">
                    <?php echo $hero_slider_1['paragraph']; ?>
                </div>
                <div class="hero-slider__buttons">
                    <?php if($hero_slider_1['buttons']): ?>
                        <?php foreach($hero_slider_1['buttons'] as $button): ?>
                            <button href="<?php echo $button['url']; ?>" class="hero-slider__<?php echo $button['links']; ?>">Learn more</button>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
        </div>
        <div class="swiper-slide">
        <img src="<?php echo $hero_slider_2['background']; ?>" class="hero-slider__background" alt="">
                
                <h2 class="hero-slider__title">
                    <?php echo $hero_slider_2['title']; ?>
                </h2>
                <div class="hero-slider__text">
                    <?php echo $hero_slider_2['paragraph']; ?>
                </div>
                <div class="hero-slider__buttons">
                    <?php if($hero_slider_2['buttons']): ?>
                        <?php foreach($hero_slider_2['buttons'] as $button): ?>
                            <button href="<?php echo $button['url']; ?>" class="hero-slider__<?php echo $button['links']; ?>">Learn more</button>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
        </div>
        <div class="swiper-slide">
        <img src="<?php echo $hero_slider_3['background']; ?>" class="hero-slider__background" alt="">
                
                <h2 class="hero-slider__title">
                    <?php echo $hero_slider_3['title']; ?>
                </h2>
                <div class="hero-slider__text">
                    <?php echo $hero_slider_3['paragraph']; ?>
                </div>
                <div class="hero-slider__buttons">
                    <?php if($hero_slider_3['buttons']): ?>
                        <?php foreach($hero_slider_3['buttons'] as $button): ?>
                            <button href="<?php echo $button['url']; ?>" class="hero-slider__<?php echo $button['links']; ?>">Learn more</button>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
        </div>
    
    </div>
  <!-- If we need pagination -->
    <div class="swiper-pagination">
    </div>

    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>

</div>

</section>

<section class="media-content">
    <div class="triple-images">
            <div class="triple-images__triple-image-1">
            <img src="<?php echo get_field('triple_image_1'); ?>" class="triple-image-item"  alt="">
            </div>
            <div class="triple-images__triple-image-2">
            <img src="<?php echo get_field('triple_image_2'); ?>"  class="triple-image-item" alt="">
            </div>
            <div class="triple-images__triple-image-3">
            <img src="<?php echo get_field('triple_image_3'); ?>"  class="triple-image-item" alt="">
            </div>
    </div>
    <div class="media-content-text">
        <div class="media-content__top-button">
                    <?php if(get_field('top_button')): ?>
                            <button href="<?php echo get_sub_field('url'); ?>" class="media-content__<?php echo get_sub_field('links'); ?>">About us</button>
                    <?php endif; ?>
        </div>
        <div class="title">
            <h2>
                <?php if(get_field('post_title')): ?>
                    <?php echo get_field('post_title'); ?>
                <?php endif; ?>
            </h2>
        </div>
        <div class="text">
            <?php if(get_field('post_text')): ?>
                <?php echo get_field('post_text'); ?>
            <?php endif; ?>
        </div>
        <div class="media-content__bottom-button">
                    <?php if(get_field('bottom_button')): ?>
                            <button href="<?php echo get_sub_field('url'); ?>" class="media-content__links">About us</button>
                    <?php endif; ?>
        </div>
    </div>
</section>

<section class="media-with-text-columns">
    <div class="column-background-container">
        <img src="<?php echo get_field('column_background'); ?>" class="media-with-text-columns__column-background" alt="">
    </div>
    <div class="column-title main-wrapper">
        <h2>
            <?php echo get_field('column_title'); ?>
        </h2>
    </div>
    <div class="services main-wrapper">
        <?php foreach(get_field('services') as $item): ?>
            <div class="service">
                <h3><?php echo $item['title']; ?></h3>
                <p><?php echo $item['bulletpoints']; ?></p> 
            </div>
        <?php endforeach; ?>
    </div>
</section>

<section class="multiple-images-with-text ">
    <div class="multiple-images">
        <div class="big-image">
        <img src="<?php echo get_field('big_image') ?>"  class="small-image" alt="">
        </div>
        <div class="small-image-1">
        <img src="<?php echo get_field('small_image_1') ?>" class="small-image" alt="">
        </div>
        <div class="small-image-2">
        <img src="<?php echo get_field('small_image_2') ?>"  class="small-image" alt="">
        </div>
        <div class="small-image-3">
        <img src="<?php echo get_field('small_image_3') ?>"  class="small-image" alt="">
        </div>
        <div class="small-image-4">
        <img src="<?php echo get_field('small_image_4') ?>" class="small-image"  alt="">
        </div>
        <div class="small-image-5">
        <img src="<?php echo get_field('small_image_5') ?>" class="small-image" alt="">
        </div>
    </div>
    <div class="images-text">
    <div class="images-text__top-button">
                    <?php if(get_field('top_button')): ?>
                            <button href="<?php echo get_sub_field('url'); ?>" class="images-text__<?php echo get_sub_field('links'); ?>">Recent work</button>
                    <?php endif; ?>
        </div>
        <div class="title">
            <h2>
                <?php if(get_field('title')): ?>
                    <?php echo get_field('title'); ?>
                <?php endif; ?>
            </h2>
        </div>
        <div class="text">
            <?php if(get_field('text')): ?>
                <?php echo get_field('text'); ?>
            <?php endif; ?>
        </div>
        <div class="images-text__bottom-button">
                    <?php if(get_field('bottom_button')): ?>
                            <button href="<?php echo get_sub_field('url'); ?>" class="images-text__links">Find out more</button>
                    <?php endif; ?>
        </div>
    </div>

</section>

<section class="banner-with-text">
            <div class="banner-overlay">
        <img src="<?php echo get_field('banner'); ?>" class="banner-with-text__banner" alt="">
        <div class="overlay">
            <img src="https://wallpaperaccess.com/full/1152525.jpg" class="overlay-image" alt="">
        </div>
        </div>
        
    <div class="banner-text">
        <h3><?php echo get_field('banner_text'); ?></h3>
    
    <div class="banner-button">
        <?php if(get_field('banner_button')): ?>
            <button href="<?php echo get_sub_field('url'); ?>" class="banner-with-text__links">Request a quote</button>
        <?php endif; ?>
    </div>
    </div>
</section>

<section class="image-list">
    <div class="image-list">
            <?php foreach(get_field('5_images') as $image): ?>
                <div class="images">
                    <img src="<?php echo $image; ?>" class="five-images" alt="">
                </div>
            <?php endforeach; ?>
    </div>
</section>

</main>

<meta>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
</meta>

<?php
    get_footer();
?>
