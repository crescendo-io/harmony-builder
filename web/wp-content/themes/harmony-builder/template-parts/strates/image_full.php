<?php
    $image          = get_sub_field('image');
    $imageArray     = get_custom_thumb($image);
    $image_format   = get_sub_field('image_format');

    $advanced       = get_advanced_fields();
    // Need params
?>

<?php if($image_format != 'image_full_container'): ?>
<div class="container-image-full">
    <?php if($imageArray['url']): ?>
        <img src="<?= $imageArray['url']; ?>" class="image-strate" alt="">
    <?php endif; ?>
</div>
<?php else: ?>
<div class="strate container-image-full <?= ($advanced['composant_white_mode']) ? 'white' : ''; ?> <?= ($advanced['composant_marge'] == 'small') ? 'marge-small' : ''; ?>"
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
            <div class="col-sm-12">
                <?php if($imageArray['url']): ?>
                    <img src="<?= $imageArray['url']; ?>" class="image-strate" alt="">
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
