<?php

<<<<<<< Updated upstream
use Twig\Loader\SourceContextLoaderInterface;

class_exists('Twig\Loader\SourceContextLoaderInterface');

@trigger_error(sprintf('Using the "Twig_SourceContextLoaderInterface" class is deprecated since Twig version 2.7, use "Twig\Loader\SourceContextLoaderInterface" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\Loader\SourceContextLoaderInterface" instead */
    class Twig_SourceContextLoaderInterface extends SourceContextLoaderInterface
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
 * Empty interface for Twig 1.x compatibility.
 */
interface Twig_SourceContextLoaderInterface extends Twig_LoaderInterface
{
>>>>>>> Stashed changes
}
