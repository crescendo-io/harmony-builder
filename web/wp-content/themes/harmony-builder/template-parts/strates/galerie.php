<?php
$images         = get_sub_field('galerie_items');

// Advanded
$advanced       = get_advanced_fields();

$classNames = get_class_strate($advanced);
$backgroundColor = get_background_strate($advanced);
$backgroundCut = get_background_cut($advanced);

?>

<?php if($images): ?>
<div class="strate galerie-photo <?= $classNames ?>" <?= $backgroundColor; ?>>
    <?= $backgroundCut; ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <ul>
                    <?php
                        foreach ($images as $image):

                        $imageArray = '';
                        if($image){
                            $imageArray = get_custom_thumb($image, 'full');
                        }
                    ?>

                    <?php if(isset($imageArray) && $imageArray): ?>

                        <li>
                            <div class="container-image">
                                <img src="<?= $imageArray['url']; ?>" alt="<?= $imageArray['alt']; ?>" width="<?= $imageArray['width']; ?>" height="<?= $imageArray['height']; ?>">
                            </div>
                        </li>
                    <?php endif; ?>

                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php endif; ?>