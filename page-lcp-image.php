<?php /* Template Name: LCP Image */ ?>

<?php
function preloadImage()
{
    $imageUrl = wp_get_attachment_image_url(9, 'full');
    $imageSrcset = wp_get_attachment_image_srcset(9);
    ?>

    <link rel="preload"
          as="image"
          href="<?php echo $imageUrl; ?>"
          imagesrcset="<?php echo $imageSrcset; ?>"
          imagesizes="100vw"
    >

    <?php
}

add_action('wp_head', 'preloadImage', 1);
?>


<?php get_header(); ?>
    <section class="hero d-flex flex-column flex-md-row">
        <?php echo wp_get_attachment_image(9, 'full', '', array('class' => 'hero__background', 'loading' => 'eager')); ?>

        <div class="container">
            <div class="row d-flex justify-content-end">
                <div class="col-md-6">
                    <h1 class="hero__title display-1"><?php the_title(); ?></h1>
                </div>
            </div>
        </div>
    </section>

<?php
get_template_part('template-parts/page', 'content');
?>

<?php get_footer(); ?>