<?php /* Template Name: CLS Video */ ?>

<?php get_header(); ?>
    <section class="hero d-flex flex-column flex-md-row d-flex align-items-center">
        <?php /*echo wp_get_attachment_image(9, 'full', '', array('class' => 'hero__background')); */?>

        <div class="container">
            <div class="row d-flex">
                <div class="col-md-6">
                    <iframe width="250" height="200" src="https://www.youtube.com/embed/kxbGIMVKacg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

                    <video width="800" height="600" autoplay muted>
                        <source src="<?php echo wp_upload_dir()['baseurl'];?>/2023/05/big_buck_bunny_720p_2mb.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
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