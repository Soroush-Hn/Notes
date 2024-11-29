<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4c2b56bd6f1a18e0a936ace43969ca82
{
    public static $prefixLengthsPsr4 = array (
        'm' => 
        array (
            'model\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'model\\' => 
        array (
            0 => __DIR__ . '/../..' . '/model',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4c2b56bd6f1a18e0a936ace43969ca82::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4c2b56bd6f1a18e0a936ace43969ca82::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4c2b56bd6f1a18e0a936ace43969ca82::$classMap;

        }, null, ClassLoader::class);
    }
}
