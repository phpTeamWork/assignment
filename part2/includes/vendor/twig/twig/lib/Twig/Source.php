<?php

<<<<<<< Updated upstream
use Twig\Source;

class_exists('Twig\Source');

@trigger_error(sprintf('Using the "Twig_Source" class is deprecated since Twig version 2.7, use "Twig\Source" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\Source" instead */
    class Twig_Source extends Source
    {
=======
/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Holds information about a non-compiled Twig template.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class Twig_Source
{
    private $code;
    private $name;
    private $path;

    /**
     * @param string $code The template source code
     * @param string $name The template logical name
     * @param string $path The filesystem path of the template if any
     */
    public function __construct($code, $name, $path = '')
    {
        $this->code = $code;
        $this->name = $name;
        $this->path = $path;
    }

    public function getCode()
    {
        return $this->code;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPath()
    {
        return $this->path;
>>>>>>> Stashed changes
    }
}
