<?php

<<<<<<< Updated upstream
use Twig\Extension\StringLoaderExtension;

class_exists('Twig\Extension\StringLoaderExtension');

@trigger_error(sprintf('Using the "Twig_Extension_StringLoader" class is deprecated since Twig version 2.7, use "Twig\Extension\StringLoaderExtension" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\Extension\StringLoaderExtension" instead */
    class Twig_Extension_StringLoader extends StringLoaderExtension
    {
    }
}
=======
/*
 * This file is part of Twig.
 *
 * (c) 2012 Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

final class Twig_Extension_StringLoader extends Twig_Extension
{
    public function getFunctions()
    {
        return array(
            new Twig_Function('template_from_string', 'twig_template_from_string', array('needs_environment' => true)),
        );
    }
}

/**
 * Loads a template from a string.
 *
 * <pre>
 * {{ include(template_from_string("Hello {{ name }}")) }}
 * </pre>
 *
 * @param Twig_Environment $env      A Twig_Environment instance
 * @param string           $template A template as a string or object implementing __toString()
 *
 * @return Twig_Template
 */
function twig_template_from_string(Twig_Environment $env, $template)
{
    return $env->createTemplate((string) $template);
}
>>>>>>> Stashed changes
