<?php

<<<<<<< Updated upstream
use Twig\Node\Expression\ConstantExpression;

class_exists('Twig\Node\Expression\ConstantExpression');

@trigger_error(sprintf('Using the "Twig_Node_Expression_Constant" class is deprecated since Twig version 2.7, use "Twig\Node\Expression\ConstantExpression" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\Node\Expression\ConstantExpression" instead */
    class Twig_Node_Expression_Constant extends ConstantExpression
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
class Twig_Node_Expression_Constant extends Twig_Node_Expression
{
    public function __construct($value, $lineno)
    {
        parent::__construct(array(), array('value' => $value), $lineno);
    }

    public function compile(Twig_Compiler $compiler)
    {
        $compiler->repr($this->getAttribute('value'));
>>>>>>> Stashed changes
    }
}
