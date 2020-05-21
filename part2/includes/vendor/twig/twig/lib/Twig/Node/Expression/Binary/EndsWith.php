<?php

<<<<<<< Updated upstream
use Twig\Node\Expression\Binary\EndsWithBinary;

class_exists('Twig\Node\Expression\Binary\EndsWithBinary');

@trigger_error(sprintf('Using the "Twig_Node_Expression_Binary_EndsWith" class is deprecated since Twig version 2.7, use "Twig\Node\Expression\Binary\EndsWithBinary" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\Node\Expression\Binary\EndsWithBinary" instead */
    class Twig_Node_Expression_Binary_EndsWith extends EndsWithBinary
    {
=======
/*
 * This file is part of Twig.
 *
 * (c) 2013 Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
class Twig_Node_Expression_Binary_EndsWith extends Twig_Node_Expression_Binary
{
    public function compile(Twig_Compiler $compiler)
    {
        $left = $compiler->getVarName();
        $right = $compiler->getVarName();
        $compiler
            ->raw(sprintf('(is_string($%s = ', $left))
            ->subcompile($this->getNode('left'))
            ->raw(sprintf(') && is_string($%s = ', $right))
            ->subcompile($this->getNode('right'))
            ->raw(sprintf(') && (\'\' === $%2$s || $%2$s === substr($%1$s, -strlen($%2$s))))', $left, $right))
        ;
    }

    public function operator(Twig_Compiler $compiler)
    {
        return $compiler->raw('');
>>>>>>> Stashed changes
    }
}
