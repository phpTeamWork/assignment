<?php

<<<<<<< Updated upstream
use Twig\Node\Expression\Test\OddTest;

class_exists('Twig\Node\Expression\Test\OddTest');

@trigger_error(sprintf('Using the "Twig_Node_Expression_Test_Odd" class is deprecated since Twig version 2.7, use "Twig\Node\Expression\Test\OddTest" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\Node\Expression\Test\OddTest" instead */
    class Twig_Node_Expression_Test_Odd extends OddTest
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
 * Checks if a number is odd.
 *
 * <pre>
 *  {{ var is odd }}
 * </pre>
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Twig_Node_Expression_Test_Odd extends Twig_Node_Expression_Test
{
    public function compile(Twig_Compiler $compiler)
    {
        $compiler
            ->raw('(')
            ->subcompile($this->getNode('node'))
            ->raw(' % 2 == 1')
            ->raw(')')
        ;
>>>>>>> Stashed changes
    }
}
