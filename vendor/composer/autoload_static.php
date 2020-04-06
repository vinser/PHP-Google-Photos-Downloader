<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit41f5cb7c6ede43b861a254c5430d55c5
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Medoo\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Medoo\\' => 
        array (
            0 => __DIR__ . '/..' . '/catfan/medoo/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit41f5cb7c6ede43b861a254c5430d55c5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit41f5cb7c6ede43b861a254c5430d55c5::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
