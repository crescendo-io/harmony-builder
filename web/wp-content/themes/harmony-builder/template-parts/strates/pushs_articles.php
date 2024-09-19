<?php
$blocs = get_sub_field('blocs');

$advanced = get_advanced_fields();
$classNames = get_class_strate($advanced);
$backgroundColor = get_background_strate($advanced);
$backgroundCut = get_background_cut($advanced);
?>


<div class="strate container-pushs-articles <?= $classNames ?>" <?= $backgroundColor; ?>>
    <?= $backgroundCut; ?>
    <div class="container">
        <div class="row">

            <?php
            $blocsCount = count($blocs);

            if ($blocsCount % 3 == 0){
                $classCol = 4;
            }else{
                $classCol = 3;
            }

            foreach ($blocs as $blocs_item):
                $imageBloc = $blocs_item['bloc_image'];
                $imageBlocArray = get_custom_thumb($imageBloc);
                $description = $blocs_item['texte'];
                $link = $blocs_item['link'];
                ?>
                <div class="col-sm-<?= $classCol; ?>">
                    <?php if(isset($link['url']) && $link['url']): ?>
                    <a href="<?= $link['url']; ?>" target="<?= $link['target']; ?>" class="container-pushs-article">
                    <?php else: ?>
                    <div class="container-pushs-article">
                    <?php endif; ?>
                        <img src="<?= $imageBlocArray['url']; ?>" class="pushs-article-image" alt="<?= $imageBlocArray['alt']; ?>" width="<?= $imageBlocArray['width']; ?>" height="<?= $imageBlocArray['height']; ?>">
                        <div class="pushs-article-description">
                            <?= $description; ?>
                        </div>
                    <?php if(isset($link['url']) && $link['url']): ?>
                        <?php if(isset($link['title']) && $link['title']): ?>
                        <div class="fake-link">
                            <?= $link['title']; ?>
                        </div>
                        <?php endif; ?>
                    </a>
                    <?php else: ?>
                    </div>
                    <?php endif; ?>
                </div>

            <?php endforeach; ?>


            <div class="col-sm-12 center">
                <?= get_template_part('template-parts/general/bloc-button'); ?>
            </div>
        </div>
    </div>
</div>