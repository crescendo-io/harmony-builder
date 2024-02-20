<?php
    $image          = get_sub_field('image');
    $imageArray     = get_custom_thumb($image);
    $title          = get_sub_field('title');
    $title_size    = get_sub_field('title_size');
    $title_color    = get_sub_field('title_color');
    $text           = get_sub_field('text');
    $order          = get_sub_field('order');

    // Advanded
    $advanced       = get_advanced_fields();

    $classNames = get_class_strate($advanced);
    $backgroundColor = get_background_strate($advanced);
    $backgroundCut = get_background_cut($advanced);

?>


<div class="strate container-image-text <?= $classNames ?>" <?= $backgroundColor; ?>>
    <?= $backgroundCut; ?>

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
                    <h2 style="<?=($title_color) ? 'color: '. $title_color : ''; ?>" class="<?= $title_size; ?>"><?= $title; ?></h2>
                    <p>
                        <?= $text; ?>
                    </p>
                    <?= get_template_part('template-parts/general/bloc-button'); ?>
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


