<?php

<<<<<<< Updated upstream
use Twig\Util\DeprecationCollector;

class_exists('Twig\Util\DeprecationCollector');

@trigger_error(sprintf('Using the "Twig_Util_DeprecationCollector" class is deprecated since Twig version 2.7, use "Twig\Util\DeprecationCollector" instead.'), E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\Util\DeprecationCollector" instead */
    class Twig_Util_DeprecationCollector extends DeprecationCollector
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
final class Twig_Util_DeprecationCollector
{
    private $twig;

    public function __construct(Twig_Environment $twig)
    {
        $this->twig = $twig;
    }

    /**
     * Returns deprecations for templates contained in a directory.
     *
     * @param string $dir A directory where templates are stored
     * @param string $ext Limit the loaded templates by extension
     *
     * @return array An array of deprecations
     */
    public function collectDir($dir, $ext = '.twig')
    {
        $iterator = new RegexIterator(
            new RecursiveIteratorIterator(
                new RecursiveDirectoryIterator($dir), RecursiveIteratorIterator::LEAVES_ONLY
            ), '{'.preg_quote($ext).'$}'
        );

        return $this->collect(new Twig_Util_TemplateDirIterator($iterator));
    }

    /**
     * Returns deprecations for passed templates.
     *
     * @param Iterator $iterator An iterator of templates (where keys are template names and values the contents of the template)
     *
     * @return array An array of deprecations
     */
    public function collect(Iterator $iterator)
    {
        $deprecations = array();
        set_error_handler(function ($type, $msg) use (&$deprecations) {
            if (E_USER_DEPRECATED === $type) {
                $deprecations[] = $msg;
            }
        });

        foreach ($iterator as $name => $contents) {
            try {
                $this->twig->parse($this->twig->tokenize($contents));
            } catch (Twig_Error_Syntax $e) {
                // ignore templates containing syntax errors
            }
        }

        restore_error_handler();

        return $deprecations;
>>>>>>> Stashed changes
    }
}
