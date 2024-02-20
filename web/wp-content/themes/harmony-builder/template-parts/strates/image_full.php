<?php
    $image          = get_sub_field('image');
    $imageArray     = get_custom_thumb($image);
    $image_format   = get_sub_field('image_format');

    $advanced       = get_advanced_fields();
    $classNames = get_class_strate($advanced);
    $backgroundColor = get_background_strate($advanced);
    $backgroundCut = get_background_cut($advanced);
    // Need params
?>

<?php if($image_format != 'image_full_container'): ?>
<div class="container-image-full">
    <?php if($imageArray['url']): ?>
        <img src="<?= $imageArray['url']; ?>" class="image-strate" alt="">
    <?php endif; ?>
</div>
<?php else: ?>
<div class="strate container-image-full <?= $classNames ?>" <?= $backgroundColor; ?>>
    <?= $backgroundCut; ?>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <?php if($imageArray['url']): ?>
                    <img src="<?= $imageArray['url']; ?>" class="image-strate" alt="">
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>



