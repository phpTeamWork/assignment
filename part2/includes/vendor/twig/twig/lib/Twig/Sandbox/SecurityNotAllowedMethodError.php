<?php

<<<<<<< Updated upstream
use Twig\Sandbox\SecurityNotAllowedMethodError;

class_exists('Twig\Sandbox\SecurityNotAllowedMethodError');

@trigger_error(sprintf('Using the "Twig_Sandbox_SecurityNotAllowedMethodError" class is deprecated since Twig version 2.7, use "Twig\Sandbox\SecurityNotAllowedMethodError" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\Sandbox\SecurityNotAllowedMethodError" instead */
    class Twig_Sandbox_SecurityNotAllowedMethodError extends SecurityNotAllowedMethodError
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
 * Exception thrown when a not allowed class method is used in a template.
 *
 * @author Kit Burton-Senior <mail@kitbs.com>
 */
class Twig_Sandbox_SecurityNotAllowedMethodError extends Twig_Sandbox_SecurityError
{
    private $className;
    private $methodName;

    public function __construct($message, $className, $methodName, $lineno = -1, $filename = null, Exception $previous = null)
    {
        parent::__construct($message, $lineno, $filename, $previous);
        $this->className = $className;
        $this->methodName = $methodName;
    }

    public function getClassName()
    {
        return $this->className;
    }

    public function getMethodName()
    {
        return $this->methodName;
>>>>>>> Stashed changes
    }
}
