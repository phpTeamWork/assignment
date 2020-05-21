<?php

<<<<<<< Updated upstream
use Twig\Node\Expression\Binary\FloorDivBinary;

class_exists('Twig\Node\Expression\Binary\FloorDivBinary');

@trigger_error(sprintf('Using the "Twig_Node_Expression_Binary_FloorDiv" class is deprecated since Twig version 2.7, use "Twig\Node\Expression\Binary\FloorDivBinary" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\Node\Expression\Binary\FloorDivBinary" instead */
    class Twig_Node_Expression_Binary_FloorDiv extends FloorDivBinary
    {
=======
/*
 * This file is part of Twig.
 *
 * (c) 2009 Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
class Twig_Node_Expression_Binary_FloorDiv extends Twig_Node_Expression_Binary
{
    public function compile(Twig_Compiler $compiler)
    {
        $compiler->raw('(int) floor(');
        parent::compile($compiler);
        $compiler->raw(')');
    }

    public function operator(Twig_Compiler $compiler)
    {
        return $compiler->raw('/');
>>>>>>> Stashed changes
    }
}
