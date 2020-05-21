<?php

<<<<<<< Updated upstream
use Twig\TokenParser\AbstractTokenParser;

class_exists('Twig\TokenParser\AbstractTokenParser');

@trigger_error(sprintf('Using the "Twig_TokenParser" class is deprecated since Twig version 2.7, use "Twig\TokenParser\AbstractTokenParser" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\TokenParser\AbstractTokenParser" instead */
    class Twig_TokenParser extends AbstractTokenParser
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
 * Base class for all token parsers.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
abstract class Twig_TokenParser implements Twig_TokenParserInterface
{
    /**
     * @var Twig_Parser
     */
    protected $parser;

    /**
     * Sets the parser associated with this token parser.
     */
    public function setParser(Twig_Parser $parser)
    {
        $this->parser = $parser;
>>>>>>> Stashed changes
    }
}
