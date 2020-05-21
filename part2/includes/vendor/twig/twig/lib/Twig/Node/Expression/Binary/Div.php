<?php

<<<<<<< Updated upstream
use Twig\Node\Expression\Binary\DivBinary;

class_exists('Twig\Node\Expression\Binary\DivBinary');

@trigger_error(sprintf('Using the "Twig_Node_Expression_Binary_Div" class is deprecated since Twig version 2.7, use "Twig\Node\Expression\Binary\DivBinary" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\Node\Expression\Binary\DivBinary" instead */
    class Twig_Node_Expression_Binary_Div extends DivBinary
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
class Twig_Node_Expression_Binary_Div extends Twig_Node_Expression_Binary
{
    public function operator(Twig_Compiler $compiler)
    {
        return $compiler->raw('/');
>>>>>>> Stashed changes
    }
}
