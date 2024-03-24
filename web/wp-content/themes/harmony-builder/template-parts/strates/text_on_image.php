<?php
$image = get_sub_field('image');
$imageArray = get_custom_thumb($image);

$title = get_sub_field('title');
$text = get_sub_field('content');
$imageDark = get_sub_field('image_dark_enable');

$advanced = get_advanced_fields();
$classNames = get_class_strate($advanced);
$backgroundColor = get_background_strate($advanced);
$backgroundCut = get_background_cut($advanced);
?>

<div class="strate container-image-on-text <?= $classNames ?> <?= ($imageDark == 1) ? 'img-dark': ''; ?>" <?= $backgroundColor; ?>>
    <?= $backgroundCut; ?>

    <img src="<?= $imageArray['url']; ?>" alt="<?= $imageArray['alt']; ?>">

    <div class="container">
        <div class="row">
            <div class="col-sm-8 mx-auto center">
                <div class="containter-text">
                    <?= $text; ?>
                    <?= get_template_part('template-parts/general/bloc-button'); ?>
                </div>
            </div>
        </div>
    </div>
</div>
