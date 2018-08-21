<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit42eab278a956b6e9bafa5d20b1af9a05
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit42eab278a956b6e9bafa5d20b1af9a05::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit42eab278a956b6e9bafa5d20b1af9a05::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}