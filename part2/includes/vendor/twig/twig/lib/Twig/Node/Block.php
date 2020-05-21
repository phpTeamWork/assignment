<?php

<<<<<<< Updated upstream
use Twig\Node\BlockNode;

class_exists('Twig\Node\BlockNode');

@trigger_error(sprintf('Using the "Twig_Node_Block" class is deprecated since Twig version 2.7, use "Twig\Node\BlockNode" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\Node\BlockNode" instead */
    class Twig_Node_Block extends BlockNode
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
 * Represents a block node.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Twig_Node_Block extends Twig_Node
{
    public function __construct($name, Twig_Node $body, $lineno, $tag = null)
    {
        parent::__construct(array('body' => $body), array('name' => $name), $lineno, $tag);
    }

    public function compile(Twig_Compiler $compiler)
    {
        $compiler
            ->addDebugInfo($this)
            ->write(sprintf("public function block_%s(\$context, array \$blocks = array())\n", $this->getAttribute('name')), "{\n")
            ->indent()
        ;

        $compiler
            ->subcompile($this->getNode('body'))
            ->outdent()
            ->write("}\n\n")
        ;
>>>>>>> Stashed changes
    }
}
