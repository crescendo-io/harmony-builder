<?php
    $cards_items = get_sub_field('cards');
    $cards_title = get_sub_field('title');

    $advanced = get_advanced_fields();

    $classNames = get_class_strate($advanced);
    $backgroundColor = get_background_strate($advanced);
    $backgroundCut = get_background_cut($advanced);
?>


<div class="strate container-slider-cards <?= $classNames ?>" <?= $backgroundColor; ?>>
    <?= $backgroundCut; ?>

    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <?= $cards_title; ?>
            </div>
            <div class="col-sm-4 text-right">
                <?= get_template_part('template-parts/general/bloc-button'); ?>
            </div>
        </div>
    </div>
    <div class="swiper" data-itemsdesk="4.2" data-itemstablet="3" data-itemsmobile="1.3">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">

            <?php
                foreach ($cards_items as $cards_item ):
                    $text = $cards_item['card_text'];
                    $image = $cards_item['card_image'];
                    $link = $cards_item['card_url'];
                    $imageArray = get_custom_thumb($image, 'full');
            ?>

            <div class="swiper-slide">
                <div class="card-slide">
                    <?php if($link): ?>
                    <a href="<?= $link['url']; ?>" target="<?= $link['target']; ?>">
                    <?php endif; ?>
                        <img src="<?= $imageArray['url']; ?>" alt="">
                        <div class="text">
                            <?= $text; ?>
                        </div>
                    <?php if($link): ?>
                    </a>
                    <?php endif; ?>
                </div>
            </div>
            <?php endforeach; ?>

        </div>
        <div class="swiper-pagination"></div>


    </div>
</div>

