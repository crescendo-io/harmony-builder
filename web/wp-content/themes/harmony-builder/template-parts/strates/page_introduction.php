<?php
    $page_introduction_title                = get_sub_field('page_introduction_title');
    $page_introduction_title_size           = get_sub_field('page_introduction_title_size');
    $page_introduction_text                 = get_sub_field('page_introduction_text');
    $page_introduction_text_color           = get_sub_field('page_introduction_text_color');
    $page_introduction_option               = get_sub_field('page_introduction_option');
    $page_introduction_background           = get_sub_field('page_introduction_background');
    $page_introduction_background_array     = get_custom_thumb($page_introduction_background);
    $page_introduction_background_dark      = get_sub_field('page_introduction_background_dark');
    $page_introduction_background_color     = get_sub_field('page_introduction_background_color');
    $page_introduction_height               = get_sub_field('page_introduction_height');
    $page_introduction_scroll               = get_sub_field('page_introduction_scroll');
    $page_introduction_buttons              = get_sub_field('page_introduction_buttons');
    $page_introduction_button_1             = get_sub_field('page_introduction_button_1');
    $page_introduction_button_2             = get_sub_field('page_introduction_button_2');
?>



<div class="strate-hero <?= $page_introduction_height; ?> <?= ($page_introduction_background_dark == 1 && $page_introduction_option == "image") ? 'dark' : ''; ?> <?= (isset($page_introduction_background_array['url']) && $page_introduction_background_array['url']) ? '' : 'text-only'; ?>" style="color: <?= $page_introduction_text_color; ?>; background: <?= $page_introduction_background_color; ?>">
    <?php if($page_introduction_option == "image" && isset($page_introduction_background_array['url']) && $page_introduction_background_array['url']): ?>
        <img src="<?= $page_introduction_background_array['url']; ?>" class="strate-hero_image" alt="<?= $page_introduction_background_array['alt']; ?>" width="<?= $page_introduction_background_array['width']; ?>" height="<?= $page_introduction_background_array['height']; ?>">
    <?php endif; ?>
    <div class="strate-hero_inner">
        <?= $page_introduction_title; ?>

        <?= get_template_part('template-parts/general/bloc-button'); ?>

    </div>

    <?php if($page_introduction_scroll && $page_introduction_height == "full"): ?>
    <div class="scroll-bottom">
        <img src="<?= get_template_directory_uri(); ?>/assets/img/scroll.svg" alt="Icon montrant une flèche vers le bas">
    </div>
    <?php endif; ?>
</div>
