<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitabee3df6d89449b3c3d7e918330b34d1
{
    public static $prefixLengthsPsr4 = array (
        'w' => 
        array (
            'wfm\\' => 4,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'wfm\\' => 
        array (
            0 => __DIR__ . '/..' . '/wfm',
        ),
        'app\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitabee3df6d89449b3c3d7e918330b34d1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitabee3df6d89449b3c3d7e918330b34d1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitabee3df6d89449b3c3d7e918330b34d1::$classMap;

        }, null, ClassLoader::class);
    }
}
