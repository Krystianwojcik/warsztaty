<?php /* Template Name: CLS JS */ ?>

<?php get_header(); ?>


    <div class="js-preloader preloader">
        <div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
    </div>

    <section class="hero d-flex flex-column flex-md-row d-flex align-items-center">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-6">
                    <h1 class="hero__title display-1"><?php the_title(); ?></h1>
                    <span class="js-text"></span>
                </div>
                <div class="col-md-6">
                    <button class="js-button btn">Otwórz Zmień Kolor</button>
                </div>
            </div>
        </div>
    </section>

<?php
get_template_part('template-parts/page', 'content');
?>

<?php get_footer(); ?>