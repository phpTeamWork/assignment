<?php

<<<<<<< Updated upstream
use Twig\Node\NodeOutputInterface;

class_exists('Twig\Node\NodeOutputInterface');

@trigger_error(sprintf('Using the "Twig_NodeOutputInterface" class is deprecated since Twig version 2.7, use "Twig\Node\NodeOutputInterface" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\Node\NodeOutputInterface" instead */
    class Twig_NodeOutputInterface extends NodeOutputInterface
    {
    }
=======
/*
 * This file is part of Twig.
 *
 * (c) 2010 Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Represents a displayable node in the AST.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
interface Twig_NodeOutputInterface
{
>>>>>>> Stashed changes
}
