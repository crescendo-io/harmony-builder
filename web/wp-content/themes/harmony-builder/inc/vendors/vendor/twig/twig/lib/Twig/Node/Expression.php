<?php

use builder\inc\vendors\vendor\twig\twig\src\Node\Expression\AbstractExpression;

class_exists('harmony-builder\inc\vendors\vendor\twig\twig\src\Node\Expression\AbstractExpression');

@trigger_error('Using the "Twig_Node_Expression" class is deprecated since Twig version 2.7, use "Twig\Node\Expression\AbstractExpression" instead.', \E_USER_DEPRECATED);

if (false) {
    /** @deprecated since Twig 2.7, use "Twig\Node\Expression\AbstractExpression" instead */
    class Twig_Node_Expression extends AbstractExpression
    {
    }
}
