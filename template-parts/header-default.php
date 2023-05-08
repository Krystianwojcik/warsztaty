<header id="masthead" class="site-header">
        <nav class="navbar fixed-top navbar-expand-lg bg-body-tertiary">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                    <?php
                    echo wp_nav_menu(
                        array(
                            'theme_location' => 'menu-1',
                            'menu_class' => 'menu collapse navbar-collapse',
                            'menu_id' => 'navbarSupportedContent',
                        )
                    );
                    ?>
            </div>
        </nav>
</header>