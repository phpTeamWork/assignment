<?php

<<<<<<< Updated upstream
use Twig\Node\FlushNode;

class_exists('Twig\Node\FlushNode');

@trigger_error(sprintf('Using the "Twig_Node_Flush" class is deprecated since Twig version 2.7, use "Twig\Node\FlushNode" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\Node\FlushNode" instead */
    class Twig_Node_Flush extends FlushNode
    {
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
 * Represents a flush node.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Twig_Node_Flush extends Twig_Node
{
    public function __construct($lineno, $tag)
    {
        parent::__construct(array(), array(), $lineno, $tag);
    }

    public function compile(Twig_Compiler $compiler)
    {
        $compiler
            ->addDebugInfo($this)
            ->write("flush();\n")
        ;
>>>>>>> Stashed changes
    }
}
