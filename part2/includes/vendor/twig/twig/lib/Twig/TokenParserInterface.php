<?php

<<<<<<< Updated upstream
use Twig\TokenParser\TokenParserInterface;

class_exists('Twig\TokenParser\TokenParserInterface');

@trigger_error(sprintf('Using the "Twig_TokenParserInterface" class is deprecated since Twig version 2.7, use "Twig\TokenParser\TokenParserInterface" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\TokenParser\TokenParserInterface" instead */
    class Twig_TokenParserInterface extends TokenParserInterface
    {
    }
=======
/*
 * This file is part of Twig.
 *
 * (c) 2010 Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Interface implemented by token parsers.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
interface Twig_TokenParserInterface
{
    /**
     * Sets the parser associated with this token parser.
     */
    public function setParser(Twig_Parser $parser);

    /**
     * Parses a token and returns a node.
     *
     * @return Twig_Node A Twig_Node instance
     *
     * @throws Twig_Error_Syntax
     */
    public function parse(Twig_Token $token);

    /**
     * Gets the tag name associated with this token parser.
     *
     * @return string The tag name
     */
    public function getTag();
>>>>>>> Stashed changes
}
