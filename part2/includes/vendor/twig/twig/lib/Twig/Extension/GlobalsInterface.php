<?php

<<<<<<< Updated upstream
use Twig\Extension\GlobalsInterface;

class_exists('Twig\Extension\GlobalsInterface');

@trigger_error(sprintf('Using the "Twig_Extension_GlobalsInterface" class is deprecated since Twig version 2.7, use "Twig\Extension\GlobalsInterface" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\Extension\GlobalsInterface" instead */
    class Twig_Extension_GlobalsInterface extends GlobalsInterface
    {
    }
=======
/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Enables usage of the deprecated Twig_Extension::getGlobals() method.
 *
 * Explicitly implement this interface if you really need to implement the
 * deprecated getGlobals() method in your extensions.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
interface Twig_Extension_GlobalsInterface
{
    /**
     * Returns a list of global variables to add to the existing list.
     *
     * @return array An array of global variables
     */
    public function getGlobals();
>>>>>>> Stashed changes
}
