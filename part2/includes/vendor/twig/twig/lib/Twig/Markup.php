<?php

<<<<<<< Updated upstream
use Twig\Markup;

class_exists('Twig\Markup');

@trigger_error(sprintf('Using the "Twig_Markup" class is deprecated since Twig version 2.7, use "Twig\Markup" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\Markup" instead */
    class Twig_Markup extends Markup
    {
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
 * Marks a content as safe.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Twig_Markup implements Countable, JsonSerializable
{
    private $content;
    private $charset;

    public function __construct($content, $charset)
    {
        $this->content = (string) $content;
        $this->charset = $charset;
    }

    public function __toString()
    {
        return $this->content;
    }

    public function count()
    {
        return mb_strlen($this->content, $this->charset);
    }

    public function jsonSerialize()
    {
        return $this->content;
>>>>>>> Stashed changes
    }
}
