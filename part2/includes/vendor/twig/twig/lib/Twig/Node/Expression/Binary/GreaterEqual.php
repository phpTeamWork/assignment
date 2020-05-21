<?php

<<<<<<< Updated upstream
use Twig\Node\Expression\Binary\GreaterEqualBinary;

class_exists('Twig\Node\Expression\Binary\GreaterEqualBinary');

@trigger_error(sprintf('Using the "Twig_Node_Expression_Binary_GreaterEqual" class is deprecated since Twig version 2.7, use "Twig\Node\Expression\Binary\GreaterEqualBinary" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\Node\Expression\Binary\GreaterEqualBinary" instead */
    class Twig_Node_Expression_Binary_GreaterEqual extends GreaterEqualBinary
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
class Twig_Node_Expression_Binary_GreaterEqual extends Twig_Node_Expression_Binary
{
    public function operator(Twig_Compiler $compiler)
    {
        return $compiler->raw('>=');
>>>>>>> Stashed changes
    }
}
