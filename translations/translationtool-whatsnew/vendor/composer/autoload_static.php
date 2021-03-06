<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita32090d08d7cd4da82fd97be17fb9e85
{
    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'Gettext\\Languages\\' => 18,
            'Gettext\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Gettext\\Languages\\' => 
        array (
            0 => __DIR__ . '/..' . '/gettext/languages/src',
        ),
        'Gettext\\' => 
        array (
            0 => __DIR__ . '/..' . '/gettext/gettext/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita32090d08d7cd4da82fd97be17fb9e85::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita32090d08d7cd4da82fd97be17fb9e85::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
