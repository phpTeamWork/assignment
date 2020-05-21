<?php

<<<<<<< Updated upstream
use Twig\Sandbox\SecurityPolicyInterface;

class_exists('Twig\Sandbox\SecurityPolicyInterface');

@trigger_error(sprintf('Using the "Twig_Sandbox_SecurityPolicyInterface" class is deprecated since Twig version 2.7, use "Twig\Sandbox\SecurityPolicyInterface" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\Sandbox\SecurityPolicyInterface" instead */
    class Twig_Sandbox_SecurityPolicyInterface extends SecurityPolicyInterface
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
 * Interfaces that all security policy classes must implements.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
interface Twig_Sandbox_SecurityPolicyInterface
{
    public function checkSecurity($tags, $filters, $functions);

    public function checkMethodAllowed($obj, $method);

    public function checkPropertyAllowed($obj, $method);
>>>>>>> Stashed changes
}
