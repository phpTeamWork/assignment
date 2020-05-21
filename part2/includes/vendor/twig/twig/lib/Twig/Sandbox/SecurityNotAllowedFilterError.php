<?php

<<<<<<< Updated upstream
use Twig\Sandbox\SecurityNotAllowedFilterError;

class_exists('Twig\Sandbox\SecurityNotAllowedFilterError');

@trigger_error(sprintf('Using the "Twig_Sandbox_SecurityNotAllowedFilterError" class is deprecated since Twig version 2.7, use "Twig\Sandbox\SecurityNotAllowedFilterError" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\Sandbox\SecurityNotAllowedFilterError" instead */
    class Twig_Sandbox_SecurityNotAllowedFilterError extends SecurityNotAllowedFilterError
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
 * Exception thrown when a not allowed filter is used in a template.
 *
 * @author Martin Hasoň <martin.hason@gmail.com>
 */
class Twig_Sandbox_SecurityNotAllowedFilterError extends Twig_Sandbox_SecurityError
{
    private $filterName;

    public function __construct($message, $functionName, $lineno = -1, $filename = null, Exception $previous = null)
    {
        parent::__construct($message, $lineno, $filename, $previous);
        $this->filterName = $functionName;
    }

    public function getFilterName()
    {
        return $this->filterName;
>>>>>>> Stashed changes
    }
}
