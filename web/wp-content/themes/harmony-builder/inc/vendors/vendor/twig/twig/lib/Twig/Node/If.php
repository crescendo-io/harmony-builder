<?php

use builder\inc\vendors\vendor\twig\twig\src\Node\IfNode;

class_exists('harmony-builder\inc\vendors\vendor\twig\twig\src\Node\IfNode');

@trigger_error('Using the "Twig_Node_If" class is deprecated since Twig version 2.7, use "Twig\Node\IfNode" instead.', \E_USER_DEPRECATED);

if (false) {
    /** @deprecated since Twig 2.7, use "Twig\Node\IfNode" instead */
    class Twig_Node_If extends IfNode
    {
    }
}
