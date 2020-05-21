<?php

<<<<<<< Updated upstream
use Twig\Node\Expression\GetAttrExpression;

class_exists('Twig\Node\Expression\GetAttrExpression');

@trigger_error(sprintf('Using the "Twig_Node_Expression_GetAttr" class is deprecated since Twig version 2.7, use "Twig\Node\Expression\GetAttrExpression" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\Node\Expression\GetAttrExpression" instead */
    class Twig_Node_Expression_GetAttr extends GetAttrExpression
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
class Twig_Node_Expression_GetAttr extends Twig_Node_Expression
{
    public function __construct(Twig_Node_Expression $node, Twig_Node_Expression $attribute, Twig_Node_Expression $arguments = null, $type, $lineno)
    {
        $nodes = array('node' => $node, 'attribute' => $attribute);
        if (null !== $arguments) {
            $nodes['arguments'] = $arguments;
        }

        parent::__construct($nodes, array('type' => $type, 'is_defined_test' => false, 'ignore_strict_check' => false), $lineno);
    }

    public function compile(Twig_Compiler $compiler)
    {
        $compiler->raw('twig_get_attribute($this->env, $this->getSourceContext(), ');

        if ($this->getAttribute('ignore_strict_check')) {
            $this->getNode('node')->setAttribute('ignore_strict_check', true);
        }

        $compiler->subcompile($this->getNode('node'));

        $compiler->raw(', ')->subcompile($this->getNode('attribute'));

        // only generate optional arguments when needed (to make generated code more readable)
        $needFourth = $this->getAttribute('ignore_strict_check');
        $needThird = $needFourth || $this->getAttribute('is_defined_test');
        $needSecond = $needThird || Twig_Template::ANY_CALL !== $this->getAttribute('type');
        $needFirst = $needSecond || $this->hasNode('arguments');

        if ($needFirst) {
            if ($this->hasNode('arguments')) {
                $compiler->raw(', ')->subcompile($this->getNode('arguments'));
            } else {
                $compiler->raw(', array()');
            }
        }

        if ($needSecond) {
            $compiler->raw(', ')->repr($this->getAttribute('type'));
        }

        if ($needThird) {
            $compiler->raw(', ')->repr($this->getAttribute('is_defined_test'));
        }

        if ($needFourth) {
            $compiler->raw(', ')->repr($this->getAttribute('ignore_strict_check'));
        }

        $compiler->raw(')');
>>>>>>> Stashed changes
    }
}
