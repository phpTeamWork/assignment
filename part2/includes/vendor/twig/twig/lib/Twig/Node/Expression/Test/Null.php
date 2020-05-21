<?php

<<<<<<< Updated upstream
use Twig\Node\Expression\Test\NullTest;

class_exists('Twig\Node\Expression\Test\NullTest');

@trigger_error(sprintf('Using the "Twig_Node_Expression_Test_Null" class is deprecated since Twig version 2.7, use "Twig\Node\Expression\Test\NullTest" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\Node\Expression\Test\NullTest" instead */
    class Twig_Node_Expression_Test_Null extends NullTest
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

/**
 * Checks that a variable is null.
 *
 * <pre>
 *  {{ var is none }}
 * </pre>
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Twig_Node_Expression_Test_Null extends Twig_Node_Expression_Test
{
    public function compile(Twig_Compiler $compiler)
    {
        $compiler
            ->raw('(null === ')
            ->subcompile($this->getNode('node'))
            ->raw(')')
        ;
>>>>>>> Stashed changes
    }
}
