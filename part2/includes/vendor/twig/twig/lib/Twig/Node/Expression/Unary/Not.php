<?php

<<<<<<< Updated upstream
use Twig\Node\Expression\Unary\NotUnary;

class_exists('Twig\Node\Expression\Unary\NotUnary');

@trigger_error(sprintf('Using the "Twig_Node_Expression_Unary_Not" class is deprecated since Twig version 2.7, use "Twig\Node\Expression\Unary\NotUnary" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\Node\Expression\Unary\NotUnary" instead */
    class Twig_Node_Expression_Unary_Not extends NotUnary
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
class Twig_Node_Expression_Unary_Not extends Twig_Node_Expression_Unary
{
    public function operator(Twig_Compiler $compiler)
    {
        $compiler->raw('!');
>>>>>>> Stashed changes
    }
}
