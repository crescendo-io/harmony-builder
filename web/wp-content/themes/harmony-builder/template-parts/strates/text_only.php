<?php
    $text = get_sub_field('text');
    $textPosition = get_sub_field('position');

    $advanced = get_advanced_fields();
    $classNames = get_class_strate($advanced);
    $backgroundColor = get_background_strate($advanced);
    $backgroundCut = get_background_cut($advanced);
?>

<div class="strate container-text-only <?= $textPosition; ?> <?= $classNames ?>" <?= $backgroundColor; ?>>
    <?= $backgroundCut; ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <?= $text; ?>

                <?= get_template_part('template-parts/general/bloc-button'); ?>
            </div>
        </div>
    </div>
</div>
