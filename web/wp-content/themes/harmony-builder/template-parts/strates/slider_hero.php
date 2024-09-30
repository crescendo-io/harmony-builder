<?php
$logo_items = get_sub_field('slider_hero_slides');

?>


<div class="strate container-hero-slider">

    <div class="swiper" data-itemsdesk="1" data-itemstablet="1" data-itemsmobile="1">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">

            <?php
            foreach ($logo_items as $logo_item ):
                $image = $logo_item['slider_hero_slides_image'];

                $imageArray = get_custom_thumb($image, 'large');
                $background = $logo_item['slider_hero_slides_background'];
                $content = $logo_item['slider_hero_slides_content'];
                $buttons = $logo_item['buttons_enable'];

                ?>

                <div class="swiper-slide">
                    <div class="card-slide" style="background-color: <?= $background; ?>">
                        <img src="<?= $imageArray['url']; ?>" width="<?= $imageArray['width']; ?>" height="<?= $imageArray['height']; ?>" alt="<?= $imageArray['alt']; ?>" loading="lazy">

                        <div class="content">
                            <?= $content; ?>

                            <?php
                            $buttons = $logo_item['buttons_enable'];
                            $buttons_1 = $logo_item['buttons_1'];
                            $buttons_1_class = $logo_item['buttons_1_class'];
                            $buttons_2 = $logo_item['buttons_2'];
                            $buttons_2_class = $logo_item['buttons_2_class'];

                            if($buttons):
                                ?>
                                <div class="container-buttons">
                                    <?php if($buttons_1): ;?>
                                        <a href="<?= $buttons_1['url']; ?>" target="<?= $buttons_1['target']; ?>" class="button primary <?= ($buttons_1_class) ? $buttons_1_class : ''; ?>">
                                            <?= $buttons_1['title']; ?>
                                        </a>
                                    <?php endif; ?>
                                    <?php if($buttons_2): ;?>
                                        <a href="<?= $buttons_2['url']; ?>" target="<?= $buttons_2['target']; ?>" class="button secondary <?= ($buttons_2_class) ? $buttons_2_class : ''; ?>">
                                            <?= $buttons_2['title']; ?>
                                        </a>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>

        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>


    </div>
</div>

