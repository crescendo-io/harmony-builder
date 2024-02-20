<?php
    $advanced = get_advanced_fields();
    $classNames = get_class_strate($advanced);
    $backgroundColor = get_background_strate($advanced);
    $backgroundCut = get_background_cut($advanced);
?>

<div class="strate marge <?= $classNames ?>" <?= $backgroundColor; ?>>
    <?= $backgroundCut; ?>
</div>