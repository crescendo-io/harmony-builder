<?php
$image_1 = get_sub_field('image_1');
$image_1_array = get_custom_thumb($image_1, 'full');
$image_2 = get_sub_field('image_2');
$image_2_array = get_custom_thumb($image_2, 'full');

$advanced = get_advanced_fields();
$classNames = get_class_strate($advanced);
$backgroundColor = get_background_strate($advanced);
$backgroundCut = get_background_cut($advanced);
?>

<div class="strate container-two-images <?= $classNames ?>" <?= $backgroundColor; ?>>
    <?= $backgroundCut; ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img src="<?= $image_1_array['url']; ?>" alt="">
            </div>
            <div class="col-sm-6">
                <img src="<?= $image_2_array['url']; ?>" alt="">
            </div>
        </div>
    </div>
</div>
