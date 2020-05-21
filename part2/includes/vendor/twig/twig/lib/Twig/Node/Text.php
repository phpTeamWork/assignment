<?php

<<<<<<< Updated upstream
use Twig\Node\TextNode;

class_exists('Twig\Node\TextNode');

@trigger_error(sprintf('Using the "Twig_Node_Text" class is deprecated since Twig version 2.7, use "Twig\Node\TextNode" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\Node\TextNode" instead */
    class Twig_Node_Text extends TextNode
    {
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
 * Represents a text node.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Twig_Node_Text extends Twig_Node implements Twig_NodeOutputInterface
{
    public function __construct($data, $lineno)
    {
        parent::__construct(array(), array('data' => $data), $lineno);
    }

    public function compile(Twig_Compiler $compiler)
    {
        $compiler
            ->addDebugInfo($this)
            ->write('echo ')
            ->string($this->getAttribute('data'))
            ->raw(";\n")
        ;
>>>>>>> Stashed changes
    }
}
