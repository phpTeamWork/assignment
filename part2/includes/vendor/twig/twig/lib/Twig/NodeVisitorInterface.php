<?php

<<<<<<< Updated upstream
use Twig\NodeVisitor\NodeVisitorInterface;

class_exists('Twig\NodeVisitor\NodeVisitorInterface');

@trigger_error(sprintf('Using the "Twig_NodeVisitorInterface" class is deprecated since Twig version 2.7, use "Twig\NodeVisitor\NodeVisitorInterface" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\NodeVisitor\NodeVisitorInterface" instead */
    class Twig_NodeVisitorInterface extends NodeVisitorInterface
    {
    }
=======
/*
 * This file is part of Twig.
 *
 * (c) 2009 Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Twig_NodeVisitorInterface is the interface the all node visitor classes must implement.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
interface Twig_NodeVisitorInterface
{
    /**
     * Called before child nodes are visited.
     *
     * @return Twig_Node The modified node
     */
    public function enterNode(Twig_Node $node, Twig_Environment $env);

    /**
     * Called after child nodes are visited.
     *
     * @return Twig_Node|false The modified node or false if the node must be removed
     */
    public function leaveNode(Twig_Node $node, Twig_Environment $env);

    /**
     * Returns the priority for this visitor.
     *
     * Priority should be between -10 and 10 (0 is the default).
     *
     * @return int The priority level
     */
    public function getPriority();
>>>>>>> Stashed changes
}
