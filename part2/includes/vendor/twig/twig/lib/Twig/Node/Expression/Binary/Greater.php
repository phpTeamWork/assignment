<?php

<<<<<<< Updated upstream
use Twig\Node\Expression\Binary\GreaterBinary;

class_exists('Twig\Node\Expression\Binary\GreaterBinary');

@trigger_error(sprintf('Using the "Twig_Node_Expression_Binary_Greater" class is deprecated since Twig version 2.7, use "Twig\Node\Expression\Binary\GreaterBinary" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\Node\Expression\Binary\GreaterBinary" instead */
    class Twig_Node_Expression_Binary_Greater extends GreaterBinary
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
class Twig_Node_Expression_Binary_Greater extends Twig_Node_Expression_Binary
{
    public function operator(Twig_Compiler $compiler)
    {
        return $compiler->raw('>');
>>>>>>> Stashed changes
    }
}
