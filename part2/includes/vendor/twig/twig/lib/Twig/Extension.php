<?php

<<<<<<< Updated upstream
use Twig\Extension\AbstractExtension;

class_exists('Twig\Extension\AbstractExtension');

@trigger_error(sprintf('Using the "Twig_Extension" class is deprecated since Twig version 2.7, use "Twig\Extension\AbstractExtension" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\Extension\AbstractExtension" instead */
    class Twig_Extension extends AbstractExtension
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
abstract class Twig_Extension implements Twig_ExtensionInterface
{
    public function getTokenParsers()
    {
        return array();
    }

    public function getNodeVisitors()
    {
        return array();
    }

    public function getFilters()
    {
        return array();
    }

    public function getTests()
    {
        return array();
    }

    public function getFunctions()
    {
        return array();
    }

    public function getOperators()
    {
        return array();
>>>>>>> Stashed changes
    }
}
