<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf5159667df8f11efc36234365a7cd2ea
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Polyfill\\Ctype\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
    );

    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Twig_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/twig/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
<<<<<<< Updated upstream
            $loader->prefixLengthsPsr4 = ComposerStaticInit9e05da6237868a1faeb45b1f94961300::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9e05da6237868a1faeb45b1f94961300::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit9e05da6237868a1faeb45b1f94961300::$prefixesPsr0;
=======
            $loader->prefixLengthsPsr4 = ComposerStaticInitf5159667df8f11efc36234365a7cd2ea::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf5159667df8f11efc36234365a7cd2ea::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitf5159667df8f11efc36234365a7cd2ea::$prefixesPsr0;
>>>>>>> Stashed changes

        }, null, ClassLoader::class);
    }
}
