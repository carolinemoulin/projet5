<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc7771244293aeaa3ac9a956459d194ba
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/www/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc7771244293aeaa3ac9a956459d194ba::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc7771244293aeaa3ac9a956459d194ba::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
