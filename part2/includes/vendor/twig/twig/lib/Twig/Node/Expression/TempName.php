<?php

<<<<<<< Updated upstream
use Twig\Node\Expression\TempNameExpression;

class_exists('Twig\Node\Expression\TempNameExpression');

@trigger_error(sprintf('Using the "Twig_Node_Expression_TempName" class is deprecated since Twig version 2.7, use "Twig\Node\Expression\TempNameExpression" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\Node\Expression\TempNameExpression" instead */
    class Twig_Node_Expression_TempName extends TempNameExpression
    {
=======
/*
 * This file is part of Twig.
 *
 * (c) 2011 Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
class Twig_Node_Expression_TempName extends Twig_Node_Expression
{
    public function __construct($name, $lineno)
    {
        parent::__construct(array(), array('name' => $name), $lineno);
    }

    public function compile(Twig_Compiler $compiler)
    {
        $compiler
            ->raw('$_')
            ->raw($this->getAttribute('name'))
            ->raw('_')
        ;
>>>>>>> Stashed changes
    }
}
