<?php

    $iframe = '';

    if(get_sub_field('iframe_html')){
        $iframe = get_sub_field('iframe_html_data');
    }else{
        $iframe = get_sub_field('iframe');
    }

    $advanced = get_advanced_fields();
    $classNames = get_class_strate($advanced);
    $backgroundColor = get_background_strate($advanced);
    $backgroundCut = get_background_cut($advanced);
    // Need params
?>


<div class="strate container-iframe <?= $classNames ?>" <?= $backgroundColor; ?>>
    <?= $backgroundCut; ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <?= $iframe; ?>
            </div>
        </div>
    </div>
</div>

