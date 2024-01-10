<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5789d0f61f8f2e5f4441252cca58e53e
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Sanzaie\\Contact\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Sanzaie\\Contact\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit5789d0f61f8f2e5f4441252cca58e53e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5789d0f61f8f2e5f4441252cca58e53e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5789d0f61f8f2e5f4441252cca58e53e::$classMap;

        }, null, ClassLoader::class);
    }
}
