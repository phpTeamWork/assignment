<?php

<<<<<<< Updated upstream
use Twig\NodeTraverser;

class_exists('Twig\NodeTraverser');

@trigger_error(sprintf('Using the "Twig_NodeTraverser" class is deprecated since Twig version 2.7, use "Twig\NodeTraverser" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\NodeTraverser" instead */
    class Twig_NodeTraverser extends NodeTraverser
    {
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
 * Twig_NodeTraverser is a node traverser.
 *
 * It visits all nodes and their children and calls the given visitor for each.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class Twig_NodeTraverser
{
    private $env;
    private $visitors = array();

    /**
     * @param Twig_Environment            $env
     * @param Twig_NodeVisitorInterface[] $visitors
     */
    public function __construct(Twig_Environment $env, array $visitors = array())
    {
        $this->env = $env;
        foreach ($visitors as $visitor) {
            $this->addVisitor($visitor);
        }
    }

    public function addVisitor(Twig_NodeVisitorInterface $visitor)
    {
        if (!isset($this->visitors[$visitor->getPriority()])) {
            $this->visitors[$visitor->getPriority()] = array();
        }

        $this->visitors[$visitor->getPriority()][] = $visitor;
    }

    /**
     * Traverses a node and calls the registered visitors.
     *
     * @return Twig_Node
     */
    public function traverse(Twig_Node $node)
    {
        ksort($this->visitors);
        foreach ($this->visitors as $visitors) {
            foreach ($visitors as $visitor) {
                $node = $this->traverseForVisitor($visitor, $node);
            }
        }

        return $node;
    }

    private function traverseForVisitor(Twig_NodeVisitorInterface $visitor, Twig_Node $node)
    {
        $node = $visitor->enterNode($node, $this->env);

        foreach ($node as $k => $n) {
            if (false !== $n = $this->traverseForVisitor($visitor, $n)) {
                $node->setNode($k, $n);
            } else {
                $node->removeNode($k);
            }
        }

        return $visitor->leaveNode($node, $this->env);
>>>>>>> Stashed changes
    }
}
