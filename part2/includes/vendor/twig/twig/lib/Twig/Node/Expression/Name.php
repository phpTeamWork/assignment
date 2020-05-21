<?php

<<<<<<< Updated upstream
use Twig\Node\Expression\NameExpression;

class_exists('Twig\Node\Expression\NameExpression');

@trigger_error(sprintf('Using the "Twig_Node_Expression_Name" class is deprecated since Twig version 2.7, use "Twig\Node\Expression\NameExpression" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\Node\Expression\NameExpression" instead */
    class Twig_Node_Expression_Name extends NameExpression
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
class Twig_Node_Expression_Name extends Twig_Node_Expression
{
    private $specialVars = array(
        '_self' => '$this->getTemplateName()',
        '_context' => '$context',
        '_charset' => '$this->env->getCharset()',
    );

    public function __construct($name, $lineno)
    {
        parent::__construct(array(), array('name' => $name, 'is_defined_test' => false, 'ignore_strict_check' => false, 'always_defined' => false), $lineno);
    }

    public function compile(Twig_Compiler $compiler)
    {
        $name = $this->getAttribute('name');

        $compiler->addDebugInfo($this);

        if ($this->getAttribute('is_defined_test')) {
            if ($this->isSpecial()) {
                $compiler->repr(true);
            } else {
                $compiler->raw('array_key_exists(')->repr($name)->raw(', $context)');
            }
        } elseif ($this->isSpecial()) {
            $compiler->raw($this->specialVars[$name]);
        } elseif ($this->getAttribute('always_defined')) {
            $compiler
                ->raw('$context[')
                ->string($name)
                ->raw(']')
            ;
        } else {
            if ($this->getAttribute('ignore_strict_check') || !$compiler->getEnvironment()->isStrictVariables()) {
                if (PHP_VERSION_ID >= 70000) {
                    // use PHP 7 null coalescing operator
                    $compiler
                        ->raw('($context[')
                        ->string($name)
                        ->raw('] ?? null)')
                    ;
                } else {
                    $compiler
                        ->raw('(isset($context[')
                        ->string($name)
                        ->raw(']) ? $context[')
                        ->string($name)
                        ->raw('] : null)')
                    ;
                }
            } else {
                $compiler
                    ->raw('(isset($context[')
                    ->string($name)
                    ->raw(']) || array_key_exists(')
                    ->string($name)
                    ->raw(', $context) ? $context[')
                    ->string($name)
                    ->raw('] : (function () { throw new Twig_Error_Runtime(\'Variable ')
                    ->string($name)
                    ->raw(' does not exist.\', ')
                    ->repr($this->lineno)
                    ->raw(', $this->getSourceContext()); })()')
                    ->raw(')')
                ;
            }
        }
    }

    public function isSpecial()
    {
        return isset($this->specialVars[$this->getAttribute('name')]);
    }

    public function isSimple()
    {
        return !$this->isSpecial() && !$this->getAttribute('is_defined_test');
>>>>>>> Stashed changes
    }
}
