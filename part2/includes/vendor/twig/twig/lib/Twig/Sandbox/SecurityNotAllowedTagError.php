<?php

<<<<<<< Updated upstream
use Twig\Sandbox\SecurityNotAllowedTagError;

class_exists('Twig\Sandbox\SecurityNotAllowedTagError');

@trigger_error(sprintf('Using the "Twig_Sandbox_SecurityNotAllowedTagError" class is deprecated since Twig version 2.7, use "Twig\Sandbox\SecurityNotAllowedTagError" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\Sandbox\SecurityNotAllowedTagError" instead */
    class Twig_Sandbox_SecurityNotAllowedTagError extends SecurityNotAllowedTagError
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
 * Exception thrown when a not allowed tag is used in a template.
 *
 * @author Martin Hasoň <martin.hason@gmail.com>
 */
class Twig_Sandbox_SecurityNotAllowedTagError extends Twig_Sandbox_SecurityError
{
    private $tagName;

    public function __construct($message, $tagName, $lineno = -1, $filename = null, Exception $previous = null)
    {
        parent::__construct($message, $lineno, $filename, $previous);
        $this->tagName = $tagName;
    }

    public function getTagName()
    {
        return $this->tagName;
>>>>>>> Stashed changes
    }
}
