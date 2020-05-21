<?php

<<<<<<< Updated upstream
use Twig\Node\DoNode;

class_exists('Twig\Node\DoNode');

@trigger_error(sprintf('Using the "Twig_Node_Do" class is deprecated since Twig version 2.7, use "Twig\Node\DoNode" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\Node\DoNode" instead */
    class Twig_Node_Do extends DoNode
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
 * Represents a do node.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Twig_Node_Do extends Twig_Node
{
    public function __construct(Twig_Node_Expression $expr, $lineno, $tag = null)
    {
        parent::__construct(array('expr' => $expr), array(), $lineno, $tag);
    }

    public function compile(Twig_Compiler $compiler)
    {
        $compiler
            ->addDebugInfo($this)
            ->write('')
            ->subcompile($this->getNode('expr'))
            ->raw(";\n")
        ;
>>>>>>> Stashed changes
    }
}
