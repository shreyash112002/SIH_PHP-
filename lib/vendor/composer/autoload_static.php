<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit56cd8c3c23e9d78a711873b505475dfd
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twilio\\' => 7,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'M' => 
        array (
            'MySQLHandler\\' => 13,
            'Monolog\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twilio\\' => 
        array (
            0 => __DIR__ . '/..' . '/twilio/sdk/Twilio',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'MySQLHandler\\' => 
        array (
            0 => __DIR__ . '/..' . '/wazaari/monolog-mysql/src/MySQLHandler',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit56cd8c3c23e9d78a711873b505475dfd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit56cd8c3c23e9d78a711873b505475dfd::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
