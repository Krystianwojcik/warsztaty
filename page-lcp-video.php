<?php /* Template Name: CLS Video */ ?>

<?php get_header(); ?>
    <section class="hero d-flex flex-column flex-md-row d-flex align-items-center">

        <div class="container">
            <div class="row d-flex">
                <div class="col-md-6">
                    <iframe width="250" height="200" src="https://www.youtube.com/embed/kxbGIMVKacg?autoplay=1&mute=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share; autoplay" allowfullscreen></iframe>


                    <video width="400" height="300" autoplay muted>
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