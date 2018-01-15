<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf8adabd908f211ad0aa84910718b8eaa
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
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf8adabd908f211ad0aa84910718b8eaa::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf8adabd908f211ad0aa84910718b8eaa::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}