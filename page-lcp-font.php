<?php /* Template Name: CLS Font */ ?>

<?php get_header(); ?>
<section class="hero heto--text">
    <?php echo wp_get_attachment_image( 9, 'full', '', array('class' => 'hero__background') );?>
    <h1 class="hero__title display-1 text-white sigmar"><?php the_title(); ?></h1>
    <h2 class="hero__sub-title display-5 text-white">Lorem Ipsum</h2>
</section>

<?php
get_template_part('template-parts/page', 'content');
?>

<?php get_footer(); ?>