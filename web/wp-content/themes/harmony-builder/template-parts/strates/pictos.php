<?php
$pictos_items = get_sub_field('pictos_items');

$advanced = get_advanced_fields();
$classNames = get_class_strate($advanced);
$backgroundColor = get_background_strate($advanced);
$backgroundCut = get_background_cut($advanced);
?>

<div class="strate container-pictos <?= $classNames ?>" <?= $backgroundColor; ?>>
    <?= $backgroundCut; ?>
    <div class="container">
        <div class="row">

            <?php
                $picto_number = count($pictos_items);

                if ($picto_number % 3 == 0){
                    $classCol = 4;
                }else{
                    $classCol = 6;
                }

                foreach ($pictos_items as $pictos_item):
                    $imagePicto = $pictos_item['pictogramme'];
                    $imagePictoArray = get_custom_thumb($imagePicto);
                    $description = $pictos_item['description'];
            ?>
                <div class="col-sm-<?= $classCol; ?>">
                    <div class="container-picto">
                        <img src="<?= $imagePictoArray['url']; ?>" alt="<?= $imagePictoArray['alt']; ?>" width="<?= $imagePictoArray['width']; ?>" height="<?= $imagePictoArray['height']; ?>" loading="lazy">

                        <div class="picto-description">
                            <?= $description; ?>
                        </div>
                    </div>
                </div>

            <?php endforeach; ?>


            <div class="col-sm-12">
                <?= get_template_part('template-parts/general/bloc-button'); ?>
            </div>
        </div>
    </div>
</div>
