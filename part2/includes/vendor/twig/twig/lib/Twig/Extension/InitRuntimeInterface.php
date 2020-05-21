<?php

<<<<<<< Updated upstream
use Twig\Extension\InitRuntimeInterface;

class_exists('Twig\Extension\InitRuntimeInterface');

@trigger_error(sprintf('Using the "Twig_Extension_InitRuntimeInterface" class is deprecated since Twig version 2.7, use "Twig\Extension\InitRuntimeInterface" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\Extension\InitRuntimeInterface" instead */
    class Twig_Extension_InitRuntimeInterface extends InitRuntimeInterface
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
 * Enables usage of the deprecated Twig_Extension::initRuntime() method.
 *
 * Explicitly implement this interface if you really need to implement the
 * deprecated initRuntime() method in your extensions.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
interface Twig_Extension_InitRuntimeInterface
{
    /**
     * Initializes the runtime environment.
     *
     * This is where you can load some file that contains filter functions for instance.
     *
     * @param Twig_Environment $environment The current Twig_Environment instance
     */
    public function initRuntime(Twig_Environment $environment);
>>>>>>> Stashed changes
}
