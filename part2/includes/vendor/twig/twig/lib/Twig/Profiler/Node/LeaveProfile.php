<?php

<<<<<<< Updated upstream
use Twig\Profiler\Node\LeaveProfileNode;

class_exists('Twig\Profiler\Node\LeaveProfileNode');

@trigger_error(sprintf('Using the "Twig_Profiler_Node_LeaveProfile" class is deprecated since Twig version 2.7, use "Twig\Profiler\Node\LeaveProfileNode" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\Profiler\Node\LeaveProfileNode" instead */
    class Twig_Profiler_Node_LeaveProfile extends LeaveProfileNode
    {
=======
/*
 * This file is part of Twig.
 *
 * (c) 2015 Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Represents a profile leave node.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Twig_Profiler_Node_LeaveProfile extends Twig_Node
{
    public function __construct($varName)
    {
        parent::__construct(array(), array('var_name' => $varName));
    }

    public function compile(Twig_Compiler $compiler)
    {
        $compiler
            ->write("\n")
            ->write(sprintf("\$%s->leave(\$%s);\n\n", $this->getAttribute('var_name'), $this->getAttribute('var_name').'_prof'))
        ;
>>>>>>> Stashed changes
    }
}
