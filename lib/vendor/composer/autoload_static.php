<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit177f6f94553784c80ca4f2bf35d09073
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'League\\HTMLToMarkdown\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'League\\HTMLToMarkdown\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/html-to-markdown/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit177f6f94553784c80ca4f2bf35d09073::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit177f6f94553784c80ca4f2bf35d09073::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit177f6f94553784c80ca4f2bf35d09073::$classMap;

        }, null, ClassLoader::class);
    }
}
