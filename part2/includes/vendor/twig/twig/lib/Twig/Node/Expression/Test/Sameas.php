<?php

<<<<<<< Updated upstream
use Twig\Node\Expression\Test\SameasTest;

class_exists('Twig\Node\Expression\Test\SameasTest');

@trigger_error(sprintf('Using the "Twig_Node_Expression_Test_Sameas" class is deprecated since Twig version 2.7, use "Twig\Node\Expression\Test\SameasTest" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\Node\Expression\Test\SameasTest" instead */
    class Twig_Node_Expression_Test_Sameas extends SameasTest
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
 * Checks if a variable is the same as another one (=== in PHP).
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Twig_Node_Expression_Test_Sameas extends Twig_Node_Expression_Test
{
    public function compile(Twig_Compiler $compiler)
    {
        $compiler
            ->raw('(')
            ->subcompile($this->getNode('node'))
            ->raw(' === ')
            ->subcompile($this->getNode('arguments')->getNode(0))
            ->raw(')')
        ;
>>>>>>> Stashed changes
    }
}
