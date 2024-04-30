<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitaba5401d307ad34ff337f500889ec833
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Mfsfiqri\\UtsFiqri\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Mfsfiqri\\UtsFiqri\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitaba5401d307ad34ff337f500889ec833::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitaba5401d307ad34ff337f500889ec833::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitaba5401d307ad34ff337f500889ec833::$classMap;

        }, null, ClassLoader::class);
    }
}