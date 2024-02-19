<?php
    $image          = get_sub_field('image');
    $imageArray     = get_custom_thumb($image);
    $title          = get_sub_field('title');
    $title_color    = get_sub_field('title_color');
    $text           = get_sub_field('text');
    $order          = get_sub_field('order');

    // Advanded
    $advanced       = get_advanced_fields();

?>


<div class="strate container-image-text <?= ($advanced['composant_white_mode']) ? 'white' : ''; ?> <?= ($advanced['composant_marge'] == 'small') ? 'marge-small' : ''; ?>"
    <?php if($advanced['params'] && $advanced['composant_background']): ?>
        style="background: <?= ($advanced['composant_background'])? $advanced['composant_background'] : ''; ?>;"
    <?php endif; ?>>

    <?php if($advanced['background_cut_enable'] && $advanced['background_cut_color']): ?>
        <div class="background-cut <?= $advanced['composant_background_cut_position']; ?>"
             style="
                     background-color: <?= $advanced['background_cut_color']; ?>;
                     height: <?= $advanced['composant_background_cut_purcent']; ?>%;
                     "
        ></div>
    <?php endif; ?>

    <div class="container">
        <div class="row">

            <?php if($order == 'left'): ?>
            <div class="col-sm-6">
                <?php if($imageArray['url']): ?>
                    <img src="<?= $imageArray['url']; ?>" class="image-strate" alt="">
                <?php endif; ?>
            </div>
            <?php endif; ?>

            <div class="col-sm-6">
                <div class="text-content">
                    <h2 style="<?=($title_color) ? 'color: '. $title_color : ''; ?>"><?= $title; ?></h2>
                    <p>
                        <?= $text; ?>
                    </p>
                </div>
            </div>

            <?php if($order == 'right'): ?>
                <div class="col-sm-6">
                    <?php if($imageArray['url']): ?>
                        <img src="<?= $imageArray['url']; ?>" class="image-strate" alt="">
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>


