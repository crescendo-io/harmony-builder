<?php
    $image          = get_sub_field('image');
    $imageArray     = get_custom_thumb($image);

    $imageMobile          = get_sub_field('image_mobile');
    $imageMobileArray     = get_custom_thumb($imageMobile);

    $image_format   = get_sub_field('image_format');

    $advanced       = get_advanced_fields();
    $classNames = get_class_strate($advanced);
    $backgroundColor = get_background_strate($advanced);
    $backgroundCut = get_background_cut($advanced);
    // Need params
?>

<?php if($image_format != 'image_full_container'): ?>
<div class="container-image-full <?= $classNames ?>" <?= $backgroundColor; ?>>
    <?= $backgroundCut; ?>
    <?php if($imageArray['url']): ?>
        <img src="<?= $imageArray['url']; ?>" class="image-strate <?= ($imageMobileArray['url']) ? 'hidden-xs' : ''; ?>" alt="<?= $imageArray['alt']; ?>" width="<?= $imageArray['width']; ?>" height="<?= $imageArray['height']; ?>" loading="lazy">
    <?php endif; ?>
    <?php if($imageMobileArray['url']) : ?>
        <img src="<?= $imageMobileArray['url']; ?>" class="image-strate visible-xs" alt="<?= $imageMobileArray['alt']; ?>" width="<?= $imageMobileArray['width']; ?>" height="<?= $imageMobileArray['height']; ?>" loading="lazy">
    <?php endif; ?>
</div>
<?php else: ?>
<div class="strate container-image-full <?= $classNames ?>" <?= $backgroundColor; ?>>
    <?= $backgroundCut; ?>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <?php if($imageArray['url']): ?>
                    <img src="<?= $imageArray['url']; ?>" class="image-strate <?= ($imageMobileArray['url']) ? 'hidden-xs' : ''; ?>" alt="<?= $imageArray['alt']; ?>" width="<?= $imageArray['width']; ?>" height="<?= $imageArray['height']; ?>" loading="lazy">
                <?php endif; ?>
                <?php if($imageMobileArray['url']) : ?>
                    <img src="<?= $imageMobileArray['url']; ?>" class="image-strate visible-xs" alt="<?= $imageMobileArray['alt']; ?>" width="<?= $imageMobileArray['width']; ?>" height="<?= $imageMobileArray['height']; ?>" loading="lazy">
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>



