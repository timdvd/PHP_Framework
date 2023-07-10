<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0dabf51485c17910d99e5a88c66a2ed6
{
    public static $prefixLengthsPsr4 = array (
        'p' => 
        array (
            'project\\' => 8,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
        'R' => 
        array (
            'RedBeanPHP\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'project\\' => 
        array (
            0 => __DIR__ . '/..' . '/project/core',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
        'RedBeanPHP\\' => 
        array (
            0 => __DIR__ . '/..' . '/gabordemooij/redbean/RedBeanPHP',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0dabf51485c17910d99e5a88c66a2ed6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0dabf51485c17910d99e5a88c66a2ed6::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
