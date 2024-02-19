<?php
    $image          = get_sub_field('image');
    $imageArray     = get_custom_thumb($image);
    $title          = get_sub_field('title');
    $title_color    = get_sub_field('title_color');
    $text           = get_sub_field('text');
    $order          = get_sub_field('order');

    $advanced = get_advanced_fields();

    // Need params
?>

<div class="container" style="background: <?= $advanced['composant_background']; ?>">
    <div class="row">
        <div class="col-sm-6">
            <img src="<?= $imageArray['url']; ?>" alt="">
        </div>
    </div>
</div>
