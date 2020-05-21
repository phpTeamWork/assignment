<?php

<<<<<<< Updated upstream
use Twig\Cache\NullCache;

class_exists('Twig\Cache\NullCache');

@trigger_error(sprintf('Using the "Twig_Cache_Null" class is deprecated since Twig version 2.7, use "Twig\Cache\NullCache" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\Cache\NullCache" instead */
    class Twig_Cache_Null extends NullCache
    {
=======
/*
 * This file is part of Twig.
 *
 * (c) 2015 Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Implements a no-cache strategy.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class Twig_Cache_Null implements Twig_CacheInterface
{
    public function generateKey($name, $className)
    {
        return '';
    }

    public function write($key, $content)
    {
    }

    public function load($key)
    {
    }

    public function getTimestamp($key)
    {
        return 0;
>>>>>>> Stashed changes
    }
}
