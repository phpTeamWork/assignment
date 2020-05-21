<?php

<<<<<<< Updated upstream
use Twig\TokenParser\FlushTokenParser;

class_exists('Twig\TokenParser\FlushTokenParser');

@trigger_error(sprintf('Using the "Twig_TokenParser_Flush" class is deprecated since Twig version 2.7, use "Twig\TokenParser\FlushTokenParser" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\TokenParser\FlushTokenParser" instead */
    class Twig_TokenParser_Flush extends FlushTokenParser
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
 * Flushes the output to the client.
 *
 * @see flush()
 */
final class Twig_TokenParser_Flush extends Twig_TokenParser
{
    public function parse(Twig_Token $token)
    {
        $this->parser->getStream()->expect(Twig_Token::BLOCK_END_TYPE);

        return new Twig_Node_Flush($token->getLine(), $this->getTag());
    }

    public function getTag()
    {
        return 'flush';
>>>>>>> Stashed changes
    }
}
