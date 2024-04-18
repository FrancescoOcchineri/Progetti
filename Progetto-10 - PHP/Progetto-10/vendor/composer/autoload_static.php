<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd0d865e4e3ee62937af18f2e4992526f
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitd0d865e4e3ee62937af18f2e4992526f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd0d865e4e3ee62937af18f2e4992526f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd0d865e4e3ee62937af18f2e4992526f::$classMap;

        }, null, ClassLoader::class);
    }
}
