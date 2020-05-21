<?php

<<<<<<< Updated upstream
use Twig\Error\RuntimeError;

class_exists('Twig\Error\RuntimeError');

@trigger_error(sprintf('Using the "Twig_Error_Runtime" class is deprecated since Twig version 2.7, use "Twig\Error\RuntimeError" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\Error\RuntimeError" instead */
    class Twig_Error_Runtime extends RuntimeError
    {
    }
=======
/*
 * This file is part of Twig.
 *
 * (c) 2009 Fabien Potencier
 * (c) 2009 Armin Ronacher
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Exception thrown when an error occurs at runtime.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Twig_Error_Runtime extends Twig_Error
{
>>>>>>> Stashed changes
}
