<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2aed841bf0f78a08e442f417c00cf10b
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Pimfw\\Component\\' => 16,
            'Pimfw\\App\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Pimfw\\Component\\' => 
        array (
            0 => __DIR__ . '/..' . '/pimenvibritania/pim-framework',
        ),
        'Pimfw\\App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2aed841bf0f78a08e442f417c00cf10b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2aed841bf0f78a08e442f417c00cf10b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
