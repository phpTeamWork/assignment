<?php

<<<<<<< Updated upstream
use Twig\Node\Expression\AssignNameExpression;

class_exists('Twig\Node\Expression\AssignNameExpression');

@trigger_error(sprintf('Using the "Twig_Node_Expression_AssignName" class is deprecated since Twig version 2.7, use "Twig\Node\Expression\AssignNameExpression" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\Node\Expression\AssignNameExpression" instead */
    class Twig_Node_Expression_AssignName extends AssignNameExpression
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

class Twig_Node_Expression_AssignName extends Twig_Node_Expression_Name
{
    public function compile(Twig_Compiler $compiler)
    {
        $compiler
            ->raw('$context[')
            ->string($this->getAttribute('name'))
            ->raw(']')
        ;
>>>>>>> Stashed changes
    }
}
