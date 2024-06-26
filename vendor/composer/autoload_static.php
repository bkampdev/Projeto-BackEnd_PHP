<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb1552f130d9bced08e16384f09028a2e
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'DankiCode\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'DankiCode\\' => 
        array (
            0 => __DIR__ . '/../..' . '/DankiCode',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb1552f130d9bced08e16384f09028a2e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb1552f130d9bced08e16384f09028a2e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb1552f130d9bced08e16384f09028a2e::$classMap;

        }, null, ClassLoader::class);
    }
}
