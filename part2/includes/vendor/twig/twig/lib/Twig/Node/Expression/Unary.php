<?php

<<<<<<< Updated upstream
use Twig\Node\Expression\Unary\AbstractUnary;

class_exists('Twig\Node\Expression\Unary\AbstractUnary');

@trigger_error(sprintf('Using the "Twig_Node_Expression_Unary" class is deprecated since Twig version 2.7, use "Twig\Node\Expression\Unary\AbstractUnary" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\Node\Expression\Unary\AbstractUnary" instead */
    class Twig_Node_Expression_Unary extends AbstractUnary
    {
    }
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
abstract class Twig_Node_Expression_Unary extends Twig_Node_Expression
{
    public function __construct(Twig_Node $node, $lineno)
    {
        parent::__construct(array('node' => $node), array(), $lineno);
    }

    public function compile(Twig_Compiler $compiler)
    {
        $compiler->raw(' ');
        $this->operator($compiler);
        $compiler->subcompile($this->getNode('node'));
    }

    abstract public function operator(Twig_Compiler $compiler);
>>>>>>> Stashed changes
}
