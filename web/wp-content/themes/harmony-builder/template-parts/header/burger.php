<header class="burger">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-5">
                <div class="button-menu">
                    <div class="barre"></div>
                    <div class="text">
                        menu
                    </div>
                </div>
            </div>
            
            <div class="col-sm-2 mx-auto center">
                <a href="<?= get_site_url(); ?>">
                    <img src="<?= get_template_directory_uri(); ?>/assets/img/logo.png" class="logo" alt="">
                </a>
            </div>

            <div class="col-sm-5">
                <ul class="social text-right">
                    <li>
                        <a href="">
                            <?= get_template_part('template-parts/icons/icon-facebook'); ?>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <?= get_template_part('template-parts/icons/icon-instagram'); ?>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <?= get_template_part('template-parts/icons/icon-linkedin'); ?>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <?= get_template_part('template-parts/icons/icon-pinterest'); ?>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>


<div class="menu-navigation">
    <?= wp_nav_menu(array(
        'menu'				=> "menu", // (int|string|WP_Term) Desired menu. Accepts a menu ID, slug, name, or object.
        'menu_class'		=> "",
        'container_class'	=> "menu",// (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
    )); ?>
</div>