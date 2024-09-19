<?php
$logo_items = get_sub_field('logo_image_items');

$advanced = get_advanced_fields();

$classNames = get_class_strate($advanced);
$backgroundColor = get_background_strate($advanced);
$backgroundCut = get_background_cut($advanced);
?>


<div class="strate container-slider-logo <?= $classNames ?>" <?= $backgroundColor; ?>>
    <?= $backgroundCut; ?>

    <div class="swiper" data-itemsdesk="6" data-itemstablet="3" data-itemsmobile="2">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">

            <?php
            foreach ($logo_items as $logo_item ):
                $image = $logo_item['logo_image_item'];
                $imageArray = get_custom_thumb($image, 'large');
                ?>

                <div class="swiper-slide">
                    <div class="card-slide">
                        <img src="<?= $imageArray['url']; ?>" width="<?= $imageArray['width']; ?>" height="<?= $imageArray['height']; ?>" alt="<?= $imageArray['alt']; ?>">
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
        <div class="swiper-pagination"></div>


    </div>
</div>

