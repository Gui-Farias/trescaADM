<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2bdaf96cf0eb2ebd8801e745d14f683c
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit2bdaf96cf0eb2ebd8801e745d14f683c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2bdaf96cf0eb2ebd8801e745d14f683c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2bdaf96cf0eb2ebd8801e745d14f683c::$classMap;

        }, null, ClassLoader::class);
    }
}
