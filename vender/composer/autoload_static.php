<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit953b64c35a19faac9726c7e09189a22f
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twilio\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twilio\\' => 
        array (
            0 => __DIR__ . '/..' . '/twilio/sdk/src/Twilio',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit953b64c35a19faac9726c7e09189a22f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit953b64c35a19faac9726c7e09189a22f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit953b64c35a19faac9726c7e09189a22f::$classMap;

        }, null, ClassLoader::class);
    }
}
