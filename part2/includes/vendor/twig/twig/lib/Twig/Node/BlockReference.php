<?php

<<<<<<< Updated upstream
use Twig\Node\BlockReferenceNode;

class_exists('Twig\Node\BlockReferenceNode');

@trigger_error(sprintf('Using the "Twig_Node_BlockReference" class is deprecated since Twig version 2.7, use "Twig\Node\BlockReferenceNode" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\Node\BlockReferenceNode" instead */
    class Twig_Node_BlockReference extends BlockReferenceNode
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
 * Represents a block call node.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Twig_Node_BlockReference extends Twig_Node implements Twig_NodeOutputInterface
{
    public function __construct($name, $lineno, $tag = null)
    {
        parent::__construct(array(), array('name' => $name), $lineno, $tag);
    }

    public function compile(Twig_Compiler $compiler)
    {
        $compiler
            ->addDebugInfo($this)
            ->write(sprintf("\$this->displayBlock('%s', \$context, \$blocks);\n", $this->getAttribute('name')))
        ;
>>>>>>> Stashed changes
    }
}
