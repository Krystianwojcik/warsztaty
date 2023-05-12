<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Warsztaty
 */

get_header();
?>

	<main id="primary" class="site-main mt-5 pt-5 mb-5 pb-5">
<div class="container">
        <div class="list-group">
            <a href="https://chrome.google.com/webstore/detail/web-developer/bfbameneiokkgbdmiekhjnmfkcnldhhm?hl=pl" target="_blank" class="list-group-item list-group-item-action" aria-current="true">1. Plugin Web Developer</a>
            <a href="https://github.com/Krystianwojcik/warsztaty/commit/5d7ca5a71e138fdbc762155eafa6605ed1253c4a" target="_blank"  class="list-group-item list-group-item-action">2. Github Preconnect</a>
            <a href="/lcp-text/" target="_blank"  class="list-group-item list-group-item-action">3. Zadanie LCP Text</a>
            <a href="/lcp-image/" target="_blank"  class="list-group-item list-group-item-action">4. Zadanie LCP Image</a>
            <a href="https://github.com/Krystianwojcik/warsztaty/commit/4cb56935137f93309b7447b373236779691a031b" target="_blank"  class="list-group-item list-group-item-action">5. Github LCP Image</a>
            <a href="/lcp-video/" target="_blank"  class="list-group-item list-group-item-action">6. Zadanie LCP Video</a>
            <a href="https://github.com/Krystianwojcik/warsztaty/commit/6a88020d1cd6d184ec6a1759116f46c64287e95f" target="_blank"  class="list-group-item list-group-item-action">7. Github LCP Video</a>
            <a href="/cls-slider/" target="_blank"  class="list-group-item list-group-item-action">8. Zadanie LCP Slider</a>
            <a href="/cls-font/" target="_blank"  class="list-group-item list-group-item-action">9. Zadanie CLS Font</a>
            <a href="https://jonassebastianohlsson.com/criticalpathcssgenerator/" target="_blank"  class="list-group-item list-group-item-action">10. CSS Critical Path Generator</a>
            <a href="https://github.com/Krystianwojcik/warsztaty/commit/a2a3059bb09f58763cc715c9f691a4ddc16e85ad" target="_blank"  class="list-group-item list-group-item-action">11. Github CSS Critical Path</a>
            <a href="/cls-js/" target="_blank"  class="list-group-item list-group-item-action">12. Zadanie Critical JS</a>
            <a href="https://github.com/Krystianwojcik/warsztaty/commit/e10ae20b8060e03494e18285e84e356f6189cf9d" target="_blank"  class="list-group-item list-group-item-action">13. Github Critical JS</a>
        </div>
</div>
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
