<?php

<<<<<<< Updated upstream
use Twig\Node\SpacelessNode;

class_exists('Twig\Node\SpacelessNode');

@trigger_error(sprintf('Using the "Twig_Node_Spaceless" class is deprecated since Twig version 2.7, use "Twig\Node\SpacelessNode" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\Node\SpacelessNode" instead */
    class Twig_Node_Spaceless extends SpacelessNode
    {
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
 * Represents a spaceless node.
 *
 * It removes spaces between HTML tags.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Twig_Node_Spaceless extends Twig_Node
{
    public function __construct(Twig_Node $body, $lineno, $tag = 'spaceless')
    {
        parent::__construct(array('body' => $body), array(), $lineno, $tag);
    }

    public function compile(Twig_Compiler $compiler)
    {
        $compiler
            ->addDebugInfo($this)
            ->write("ob_start();\n")
            ->subcompile($this->getNode('body'))
            ->write("echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));\n")
        ;
>>>>>>> Stashed changes
    }
}
