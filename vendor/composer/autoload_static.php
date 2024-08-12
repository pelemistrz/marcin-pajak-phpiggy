<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit60d03b47c013ac57e80088d58b35ad8d
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Framework\\' => 10,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Framework\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Framework',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit60d03b47c013ac57e80088d58b35ad8d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit60d03b47c013ac57e80088d58b35ad8d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit60d03b47c013ac57e80088d58b35ad8d::$classMap;

        }, null, ClassLoader::class);
    }
}
