<?php /* Template Name: CLS Slider */ ?>

<?php get_header(); ?>
    <section class="hero d-flex justify-content-center align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-md-6">

                    <div class="swiper hero__slider mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <?php echo wp_get_attachment_image(9, 'large', '', array('class' => 'hero__background')); ?>
                                Slide 1
                            </div>
                            <div class="swiper-slide">
                                <?php echo wp_get_attachment_image(9, 'large', '', array('class' => 'hero__background')); ?>
                                Slide 2
                            </div>
                            <div class="swiper-slide">
                                <?php echo wp_get_attachment_image(9, 'large', '', array('class' => 'hero__background')); ?>
                                Slide 3
                            </div>
                            <div class="swiper-slide">
                                <?php echo wp_get_attachment_image(9, 'large', '', array('class' => 'hero__background')); ?>
                                Slide 4
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>

                </div>
                <div class="col-md-6 d-flex align-items-center">
                    <h1 class="hero__title display-1"><?php the_title(); ?></h1>
                </div>
            </div>
        </div>

    </section>

<?php
get_template_part('template-parts/page', 'content');
?>

<?php get_footer(); ?>