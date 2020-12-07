<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita093622a53494ff06255693c2c9e5138
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MOSYLE\\' => 7,
        ),
        'A' => 
        array (
            'Api\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MOSYLE\\' => 
        array (
            0 => __DIR__ . '/..' . '/MOSYLE',
        ),
        'Api\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Api',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita093622a53494ff06255693c2c9e5138::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita093622a53494ff06255693c2c9e5138::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita093622a53494ff06255693c2c9e5138::$classMap;

        }, null, ClassLoader::class);
    }
}