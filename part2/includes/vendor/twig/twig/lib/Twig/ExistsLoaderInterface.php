<?php

<<<<<<< Updated upstream
use Twig\Loader\ExistsLoaderInterface;

class_exists('Twig\Loader\ExistsLoaderInterface');

@trigger_error(sprintf('Using the "Twig_ExistsLoaderInterface" class is deprecated since Twig version 2.7, use "Twig\Loader\ExistsLoaderInterface" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\Loader\ExistsLoaderInterface" instead */
    class Twig_ExistsLoaderInterface extends ExistsLoaderInterface
    {
    }
=======
/*
 * This file is part of Twig.
 *
 * (c) 2009 Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Empty interface for Twig 1.x compatibility.
 */
interface Twig_ExistsLoaderInterface extends Twig_LoaderInterface
{
>>>>>>> Stashed changes
}
