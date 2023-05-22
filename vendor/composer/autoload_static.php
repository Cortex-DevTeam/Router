<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6a242b099ab2740a63ef6149b2f157b9
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Cortex\\Router\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Cortex\\Router\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6a242b099ab2740a63ef6149b2f157b9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6a242b099ab2740a63ef6149b2f157b9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6a242b099ab2740a63ef6149b2f157b9::$classMap;

        }, null, ClassLoader::class);
    }
}
