<?php

<<<<<<< Updated upstream
use Twig\Node\Expression\Binary\MatchesBinary;

class_exists('Twig\Node\Expression\Binary\MatchesBinary');

@trigger_error(sprintf('Using the "Twig_Node_Expression_Binary_Matches" class is deprecated since Twig version 2.7, use "Twig\Node\Expression\Binary\MatchesBinary" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\Node\Expression\Binary\MatchesBinary" instead */
    class Twig_Node_Expression_Binary_Matches extends MatchesBinary
    {
=======
/*
 * This file is part of Twig.
 *
 * (c) 2013 Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
class Twig_Node_Expression_Binary_Matches extends Twig_Node_Expression_Binary
{
    public function compile(Twig_Compiler $compiler)
    {
        $compiler
            ->raw('preg_match(')
            ->subcompile($this->getNode('right'))
            ->raw(', ')
            ->subcompile($this->getNode('left'))
            ->raw(')')
        ;
    }

    public function operator(Twig_Compiler $compiler)
    {
        return $compiler->raw('');
>>>>>>> Stashed changes
    }
}
