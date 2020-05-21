<?php

<<<<<<< Updated upstream
use Twig\Node\Expression\Binary\StartsWithBinary;

class_exists('Twig\Node\Expression\Binary\StartsWithBinary');

@trigger_error(sprintf('Using the "Twig_Node_Expression_Binary_StartsWith" class is deprecated since Twig version 2.7, use "Twig\Node\Expression\Binary\StartsWithBinary" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\Node\Expression\Binary\StartsWithBinary" instead */
    class Twig_Node_Expression_Binary_StartsWith extends StartsWithBinary
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
class Twig_Node_Expression_Binary_StartsWith extends Twig_Node_Expression_Binary
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
            ->raw(sprintf(') && (\'\' === $%2$s || 0 === strpos($%1$s, $%2$s)))', $left, $right))
        ;
    }

    public function operator(Twig_Compiler $compiler)
    {
        return $compiler->raw('');
>>>>>>> Stashed changes
    }
}
