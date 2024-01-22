<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf5ab396b2659fb90568987497a283750
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'D' => 
        array (
            'Dqhie\\Asm1\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'Dqhie\\Asm1\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf5ab396b2659fb90568987497a283750::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf5ab396b2659fb90568987497a283750::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf5ab396b2659fb90568987497a283750::$classMap;

        }, null, ClassLoader::class);
    }
}
