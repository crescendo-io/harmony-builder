<?php
$citations_items = get_sub_field('citations_items');

$advanced = get_advanced_fields();

$classNames = get_class_strate($advanced);
$backgroundColor = get_background_strate($advanced);
$backgroundCut = get_background_cut($advanced);
?>


<div class="strate container-slider-quotes <?= $classNames ?>" <?= $backgroundColor; ?>>
    <?= $backgroundCut; ?>

    <div class="swiper" data-itemsdesk="1" data-itemstablet="1" data-itemsmobile="1">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">

            <?php
            foreach ($citations_items as $citations_item ):
                $text = $citations_item['citation'];
                $image = $citations_item['image'];
                $name_author = $citations_item['name_author'];
                $post_author = $citations_item['post_author'];
                $stars = $citations_item['stars'];

                $imageArray = get_custom_thumb($image, 'full');
                ?>

                <div class="swiper-slide">
                    <div class="citation">
                        <div class="text">
                            <?= $text; ?>
                        </div>
                        <?php if($stars): ?>
                        <div class="stars">
                            <?php
                            $stars = intval($stars);
                            $i = 1;
                            while ($i <= 5){ ?>
                                <div class="star <?= ($i <= $stars) ? 'active' : ''; ?>">
                                    <svg width="39" height="36" viewBox="0 0 39 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19.5 0L23.878 13.4742H38.0456L26.5838 21.8017L30.9618 35.2758L19.5 26.9483L8.03819 35.2758L12.4162 21.8017L0.954397 13.4742H15.122L19.5 0Z" fill="white"/>
                                    </svg>
                                </div>
                            <?php $i++;
                            }

                            ?>
                        </div>
                        <?php endif; ?>

                        <?php if(isset($imageArray) && $imageArray): ?>
                        <div class="image-author">
                            <img src="<?= $imageArray['url']; ?>" alt="<?= $imageArray['alt']; ?>" loading="lazy">
                        </div>
                        <?php endif; ?>
                        <div class="author-infos">
                            <div class="name"><?= $name_author ?></div>
                            <div class="post"><?= $post_author ?></div>
                        </div>

                    </div>
                </div>
            <?php endforeach; ?>

        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-pagination"></div>


    </div>
</div>

