<?php
    $buttons = get_sub_field('buttons_enable');
    $buttons_1 = get_sub_field('buttons_1');
    $buttons_2 = get_sub_field('buttons_2');

    if($buttons):
?>


<div class="container-buttons">
    <?php if($buttons_1): ;?>
        <a href="<?= $buttons_1['url']; ?>" target="<?= $buttons_1['target']; ?>" class="button primary">
            <?= $buttons_1['title']; ?>
        </a>
    <?php endif; ?>
    <?php if($buttons_2): ;?>
        <a href="<?= $buttons_2['url']; ?>" target="<?= $buttons_2['target']; ?>" class="button secondary">
            <?= $buttons_2['title']; ?>
        </a>
    <?php endif; ?>
</div>

<?php endif; ?>