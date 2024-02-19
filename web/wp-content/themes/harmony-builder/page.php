<?php
get_header();

?>


<?php
if( have_rows('page') ):
    while ( have_rows('page') ) : the_row();
        var_dump(get_row_layout());
        get_template_part('template-parts/strates', get_row_layout());
    endwhile;
endif;


?>
    <main id="main" class="main">
        <?php
        while (have_posts()) :
            the_post();
            get_template_part('template-parts/content', 'page');
        endwhile;
        ?>
    </main>
<?php
get_footer();

