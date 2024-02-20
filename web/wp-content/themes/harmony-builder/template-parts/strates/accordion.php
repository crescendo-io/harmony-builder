<?php
$accordion_items = get_sub_field('accordion_items');

$advanced = get_advanced_fields();
$classNames = get_class_strate($advanced);
$backgroundColor = get_background_strate($advanced);
$backgroundCut = get_background_cut($advanced);

?>

<div class="strate container-accordeon <?= $classNames ?>" <?= $backgroundColor; ?>>
    <?= $backgroundCut; ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <?php if($accordion_items): ?>
                <div class="accordeon">
                    <?php $i = 0; foreach ($accordion_items as $accordion_item ): ?>
                        <div class="accordeon-item <?= ($i == 0) ? 'is-open': ''; ?>">
                            <div class="accordeon-item-title">
                                <h3>
                                    <?= $accordion_item['title_accordeon']; ?>
                                </h3>
                            </div>
                            <div class="accordeon-item-text">
                                <?= $accordion_item['text_accordeon']; ?>
                            </div>
                        </div>

                    <?php $i++; endforeach; ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
