<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd8f0dc6f38a60401e4ba7829da45c768
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Doctrine\\Common\\Lexer\\' => 22,
            'Doctrine\\Common\\Annotations\\' => 28,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Doctrine\\Common\\Lexer\\' => 
        array (
            0 => __DIR__ . '/..' . '/doctrine/lexer/lib/Doctrine/Common/Lexer',
        ),
        'Doctrine\\Common\\Annotations\\' => 
        array (
            0 => __DIR__ . '/..' . '/doctrine/annotations/lib/Doctrine/Common/Annotations',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd8f0dc6f38a60401e4ba7829da45c768::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd8f0dc6f38a60401e4ba7829da45c768::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
