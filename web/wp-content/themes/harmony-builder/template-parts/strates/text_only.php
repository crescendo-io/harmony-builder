<?php
    $text = get_sub_field('text');
    $textPosition = get_sub_field('position');

    $advanced = get_advanced_fields();
    // Need params
?>

<div class="strate container-text-only <?= ($advanced['composant_white_mode']) ? 'white' : ''; ?> <?= ($advanced['composant_marge'] == 'small') ? 'marge-small' : ''; ?> <?= $textPosition; ?>"
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
                <?= $text; ?>
            </div>
        </div>
    </div>
</div>
