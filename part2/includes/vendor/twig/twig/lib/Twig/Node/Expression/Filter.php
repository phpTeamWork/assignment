<?php

<<<<<<< Updated upstream
use Twig\Node\Expression\FilterExpression;

class_exists('Twig\Node\Expression\FilterExpression');

@trigger_error(sprintf('Using the "Twig_Node_Expression_Filter" class is deprecated since Twig version 2.7, use "Twig\Node\Expression\FilterExpression" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\Node\Expression\FilterExpression" instead */
    class Twig_Node_Expression_Filter extends FilterExpression
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
class Twig_Node_Expression_Filter extends Twig_Node_Expression_Call
{
    public function __construct(Twig_Node $node, Twig_Node_Expression_Constant $filterName, Twig_Node $arguments, $lineno, $tag = null)
    {
        parent::__construct(array('node' => $node, 'filter' => $filterName, 'arguments' => $arguments), array(), $lineno, $tag);
    }

    public function compile(Twig_Compiler $compiler)
    {
        $name = $this->getNode('filter')->getAttribute('value');
        $filter = $compiler->getEnvironment()->getFilter($name);

        $this->setAttribute('name', $name);
        $this->setAttribute('type', 'filter');
        $this->setAttribute('needs_environment', $filter->needsEnvironment());
        $this->setAttribute('needs_context', $filter->needsContext());
        $this->setAttribute('arguments', $filter->getArguments());
        $this->setAttribute('callable', $filter->getCallable());
        $this->setAttribute('is_variadic', $filter->isVariadic());

        $this->compileCallable($compiler);
>>>>>>> Stashed changes
    }
}
