<?php

use builder\inc\vendors\vendor\twig\twig\src\Node\Expression\BlockReferenceExpression;

class_exists('harmony-builder\inc\vendors\vendor\twig\twig\src\Node\Expression\BlockReferenceExpression');

@trigger_error('Using the "Twig_Node_Expression_BlockReference" class is deprecated since Twig version 2.7, use "Twig\Node\Expression\BlockReferenceExpression" instead.', \E_USER_DEPRECATED);

if (false) {
    /** @deprecated since Twig 2.7, use "Twig\Node\Expression\BlockReferenceExpression" instead */
    class Twig_Node_Expression_BlockReference extends BlockReferenceExpression
    {
    }
}
