<?php
    get_header();
?>

<main>
<section class="media-content">

    <div class="media-content-text">

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

    </div>
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
</section>

<section class="single-image-with-text">
    <div class="single-image-container">
        <img src="<?php echo get_field('single_image'); ?>" class="single-image"  alt="">
    </div>
    <div class="single-image-text-field">
        <h2><?php echo get_field('single_image_title'); ?></h2>
        <p class="single-image-text"><?php echo get_field('single_image_text'); ?></p>
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

<?php
    get_footer();
?>
