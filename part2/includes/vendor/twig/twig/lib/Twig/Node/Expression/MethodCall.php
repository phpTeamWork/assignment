<?php

<<<<<<< Updated upstream
use Twig\Node\Expression\MethodCallExpression;

class_exists('Twig\Node\Expression\MethodCallExpression');

@trigger_error(sprintf('Using the "Twig_Node_Expression_MethodCall" class is deprecated since Twig version 2.7, use "Twig\Node\Expression\MethodCallExpression" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\Node\Expression\MethodCallExpression" instead */
    class Twig_Node_Expression_MethodCall extends MethodCallExpression
    {
=======
/*
 * This file is part of Twig.
 *
 * (c) 2012 Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
class Twig_Node_Expression_MethodCall extends Twig_Node_Expression
{
    public function __construct(Twig_Node_Expression $node, $method, Twig_Node_Expression_Array $arguments, $lineno)
    {
        parent::__construct(array('node' => $node, 'arguments' => $arguments), array('method' => $method, 'safe' => false), $lineno);

        if ($node instanceof Twig_Node_Expression_Name) {
            $node->setAttribute('always_defined', true);
        }
    }

    public function compile(Twig_Compiler $compiler)
    {
        $compiler
            ->subcompile($this->getNode('node'))
            ->raw('->')
            ->raw($this->getAttribute('method'))
            ->raw('(')
        ;
        $first = true;
        foreach ($this->getNode('arguments')->getKeyValuePairs() as $pair) {
            if (!$first) {
                $compiler->raw(', ');
            }
            $first = false;

            $compiler->subcompile($pair['value']);
        }
        $compiler->raw(')');
>>>>>>> Stashed changes
    }
}
