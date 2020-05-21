<?php

<<<<<<< Updated upstream
use Twig\Util\TemplateDirIterator;

class_exists('Twig\Util\TemplateDirIterator');

@trigger_error(sprintf('Using the "Twig_Util_TemplateDirIterator" class is deprecated since Twig version 2.7, use "Twig\Util\TemplateDirIterator" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\Util\TemplateDirIterator" instead */
    class Twig_Util_TemplateDirIterator extends TemplateDirIterator
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
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Twig_Util_TemplateDirIterator extends IteratorIterator
{
    public function current()
    {
        return file_get_contents(parent::current());
    }

    public function key()
    {
        return (string) parent::key();
>>>>>>> Stashed changes
    }
}
