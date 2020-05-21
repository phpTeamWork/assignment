<?php

<<<<<<< Updated upstream
use Twig\Node\Expression\Binary\AbstractBinary;

class_exists('Twig\Node\Expression\Binary\AbstractBinary');

@trigger_error(sprintf('Using the "Twig_Node_Expression_Binary" class is deprecated since Twig version 2.7, use "Twig\Node\Expression\Binary\AbstractBinary" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\Node\Expression\Binary\AbstractBinary" instead */
    class Twig_Node_Expression_Binary extends AbstractBinary
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
abstract class Twig_Node_Expression_Binary extends Twig_Node_Expression
{
    public function __construct(Twig_Node $left, Twig_Node $right, $lineno)
    {
        parent::__construct(array('left' => $left, 'right' => $right), array(), $lineno);
    }

    public function compile(Twig_Compiler $compiler)
    {
        $compiler
            ->raw('(')
            ->subcompile($this->getNode('left'))
            ->raw(' ')
        ;
        $this->operator($compiler);
        $compiler
            ->raw(' ')
            ->subcompile($this->getNode('right'))
            ->raw(')')
        ;
    }

    abstract public function operator(Twig_Compiler $compiler);
>>>>>>> Stashed changes
}
