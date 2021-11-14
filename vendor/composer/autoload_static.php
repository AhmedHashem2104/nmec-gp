<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb66241129dd501dfc5975dcdf110eda2
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

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb66241129dd501dfc5975dcdf110eda2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb66241129dd501dfc5975dcdf110eda2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb66241129dd501dfc5975dcdf110eda2::$classMap;

        }, null, ClassLoader::class);
    }
}