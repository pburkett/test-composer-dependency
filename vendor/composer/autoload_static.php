<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcd9b11aab68866c918602165f51a37f9
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Parker\\ComposerTesting\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Parker\\ComposerTesting\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcd9b11aab68866c918602165f51a37f9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcd9b11aab68866c918602165f51a37f9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcd9b11aab68866c918602165f51a37f9::$classMap;

        }, null, ClassLoader::class);
    }
}
