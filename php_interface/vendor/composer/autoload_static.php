<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite9ae12763eb7bf3d93239684813dfd43
{
    public static $prefixLengthsPsr4 = array (
        'O' => 
        array (
            'One\\Guzzle\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'One\\Guzzle\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite9ae12763eb7bf3d93239684813dfd43::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite9ae12763eb7bf3d93239684813dfd43::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite9ae12763eb7bf3d93239684813dfd43::$classMap;

        }, null, ClassLoader::class);
    }
}
