<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfec21e46105de2a3865984b807c2144d
{
    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'PhpImap' => 
            array (
                0 => __DIR__ . '/..' . '/php-imap/php-imap/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInitfec21e46105de2a3865984b807c2144d::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitfec21e46105de2a3865984b807c2144d::$classMap;

        }, null, ClassLoader::class);
    }
}