<ul class="social text-right">
    <?php if(get_field('option_facebook','option')): ?>
        <li>
            <a href="<?= get_field('option_facebook', 'option'); ?>" target="_blank">
                <?= get_template_part('template-parts/icons/icon-facebook'); ?>
            </a>
        </li>
    <?php endif; ?>

    <?php if(get_field('option_instagram','option')): ?>
        <li>
            <a href="<?= get_field('option_instagram', 'option'); ?>" target="_blank">
                <?= get_template_part('template-parts/icons/icon-instagram'); ?>
            </a>
        </li>
    <?php endif; ?>

    <?php if(get_field('option_linkedin','option')): ?>
        <li>
            <a href="<?= get_field('option_linkedin', 'option'); ?>" target="_blank">
                <?= get_template_part('template-parts/icons/icon-linkedin'); ?>
            </a>
        </li>
    <?php endif; ?>

    <?php if(get_field('option_pinterest','option')): ?>
        <li>
            <a href="<?= get_field('option_pinterest', 'option'); ?>" target="_blank">
                <?= get_template_part('template-parts/icons/icon-pinterest'); ?>
            </a>
        </li>
    <?php endif; ?>
</ul>