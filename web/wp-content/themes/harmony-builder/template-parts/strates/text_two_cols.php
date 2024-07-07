<?php
$text_left_col = get_sub_field('text_left_col');
$text_right_col = get_sub_field('text_right_col');

$advanced = get_advanced_fields();
$classNames = get_class_strate($advanced);
$backgroundColor = get_background_strate($advanced);
$backgroundCut = get_background_cut($advanced);
?>

<div class="strate container-text-only two-cols <?= $classNames ?>" <?= $backgroundColor; ?>>
    <?= $backgroundCut; ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <?= $text_left_col; ?>
            </div>
            <div class="col-sm-6">
                <?= $text_right_col; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 center">
                <?= get_template_part('template-parts/general/bloc-button'); ?>
            </div>
        </div>
    </div>
</div>
