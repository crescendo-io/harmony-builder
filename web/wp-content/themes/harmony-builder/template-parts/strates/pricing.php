<?php
$bloc_pricing = get_sub_field('bloc_pricing');

$advanced = get_advanced_fields();
$classNames = get_class_strate($advanced);
$backgroundColor = get_background_strate($advanced);
$backgroundCut = get_background_cut($advanced);
?>

<div class="strate container-pricing <?= $classNames ?>" <?= $backgroundColor; ?>>
    <?= $backgroundCut; ?>
    <div class="container">
        <div class="row">

            <?php
            $price_number = count($bloc_pricing);

            if ($price_number % 3 == 0){
                $classCol = 4;
            }else{
                $classCol = 3;
            }

            foreach ($bloc_pricing as $bloc_pricing_item):
                $bloc_pricing_title = $bloc_pricing_item['bloc_pricing_title'];
                $bloc_pricing_description = $bloc_pricing_item['bloc_pricing_description'];
                $bloc_pricing_pricing = $bloc_pricing_item['bloc_pricing_pricing'];
                $bloc_pricing_link = $bloc_pricing_item['bloc_pricing_link'];
            ?>

            <div class="col-sm-<?= $classCol; ?>">
                <?php if($bloc_pricing_link && isset($bloc_pricing_link['title']) && isset($bloc_pricing_link['url'])): ?>
                <a class="card-pricing" href="<?= $bloc_pricing_link['url']; ?>" <?= $bloc_pricing_link['target']; ?>
                <?php else: ?>
                <div class="card-pricing">
                <?php endif; ?>
                    <div class="title-pricing">
                        <?= $bloc_pricing_title; ?>
                    </div>
                    <div class="description-pricing">
                        <?= $bloc_pricing_description; ?>
                    </div>

                    <div class="price">
                        <?= $bloc_pricing_pricing; ?>
                    </div>
                <?php if($bloc_pricing_link && $bloc_pricing_link['title'] && $bloc_pricing_link['url']): ?>
                </a>
                <?php else: ?>
                </div>
                <?php endif; ?>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="row">
            <div class="col-sm-12 center">
                <?= get_template_part('template-parts/general/bloc-button'); ?>
            </div>
        </div>
    </div>
</div>
