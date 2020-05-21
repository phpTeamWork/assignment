<?php

<<<<<<< Updated upstream
use Twig\Node\Expression\Binary\NotInBinary;

class_exists('Twig\Node\Expression\Binary\NotInBinary');

@trigger_error(sprintf('Using the "Twig_Node_Expression_Binary_NotIn" class is deprecated since Twig version 2.7, use "Twig\Node\Expression\Binary\NotInBinary" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\Node\Expression\Binary\NotInBinary" instead */
    class Twig_Node_Expression_Binary_NotIn extends NotInBinary
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
class Twig_Node_Expression_Binary_NotIn extends Twig_Node_Expression_Binary
{
    public function compile(Twig_Compiler $compiler)
    {
        $compiler
            ->raw('!twig_in_filter(')
            ->subcompile($this->getNode('left'))
            ->raw(', ')
            ->subcompile($this->getNode('right'))
            ->raw(')')
        ;
    }

    public function operator(Twig_Compiler $compiler)
    {
        return $compiler->raw('not in');
>>>>>>> Stashed changes
    }
}
