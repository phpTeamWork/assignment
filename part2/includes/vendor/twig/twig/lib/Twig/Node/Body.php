<?php

<<<<<<< Updated upstream
use Twig\Node\BodyNode;

class_exists('Twig\Node\BodyNode');

@trigger_error(sprintf('Using the "Twig_Node_Body" class is deprecated since Twig version 2.7, use "Twig\Node\BodyNode" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\Node\BodyNode" instead */
    class Twig_Node_Body extends BodyNode
    {
    }
=======
/*
 * This file is part of Twig.
 *
 * (c) 2011 Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Represents a body node.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Twig_Node_Body extends Twig_Node
{
>>>>>>> Stashed changes
}
