<?php

use builder\inc\vendors\vendor\twig\twig\src\Sandbox\SecurityNotAllowedFilterError;

class_exists('harmony-builder\inc\vendors\vendor\twig\twig\src\Sandbox\SecurityNotAllowedFilterError');

@trigger_error('Using the "Twig_Sandbox_SecurityNotAllowedFilterError" class is deprecated since Twig version 2.7, use "Twig\Sandbox\SecurityNotAllowedFilterError" instead.', \E_USER_DEPRECATED);

if (false) {
    /** @deprecated since Twig 2.7, use "Twig\Sandbox\SecurityNotAllowedFilterError" instead */
    class Twig_Sandbox_SecurityNotAllowedFilterError extends SecurityNotAllowedFilterError
    {
    }
}
