<?php
    $advanced = get_advanced_fields();
?>

<div class="strate marge <?= ($advanced['composant_marge'] == 'small') ? 'marge-small' : ''; ?>"
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
</div>