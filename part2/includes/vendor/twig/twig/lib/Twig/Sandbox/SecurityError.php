<?php

<<<<<<< Updated upstream
use Twig\Sandbox\SecurityError;

class_exists('Twig\Sandbox\SecurityError');

@trigger_error(sprintf('Using the "Twig_Sandbox_SecurityError" class is deprecated since Twig version 2.7, use "Twig\Sandbox\SecurityError" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\Sandbox\SecurityError" instead */
    class Twig_Sandbox_SecurityError extends SecurityError
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
 * Exception thrown when a security error occurs at runtime.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Twig_Sandbox_SecurityError extends Twig_Error
{
>>>>>>> Stashed changes
}
