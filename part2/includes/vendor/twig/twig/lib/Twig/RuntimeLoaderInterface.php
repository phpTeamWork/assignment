<?php

<<<<<<< Updated upstream
use Twig\RuntimeLoader\RuntimeLoaderInterface;

class_exists('Twig\RuntimeLoader\RuntimeLoaderInterface');

@trigger_error(sprintf('Using the "Twig_RuntimeLoaderInterface" class is deprecated since Twig version 2.7, use "Twig\RuntimeLoader\RuntimeLoaderInterface" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\RuntimeLoader\RuntimeLoaderInterface" instead */
    class Twig_RuntimeLoaderInterface extends RuntimeLoaderInterface
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
 * Creates runtime implementations for Twig elements (filters/functions/tests).
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
interface Twig_RuntimeLoaderInterface
{
    /**
     * Creates the runtime implementation of a Twig element (filter/function/test).
     *
     * @param string $class A runtime class
     *
     * @return object|null The runtime instance or null if the loader does not know how to create the runtime for this class
     */
    public function load($class);
>>>>>>> Stashed changes
}
