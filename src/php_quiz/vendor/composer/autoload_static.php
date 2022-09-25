<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfacec64a7c9b788d665dc62901d3b83f
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'App\\Classes\\FormComposerClass' => __DIR__ . '/../..' . '/src/Classes/FormComposerClass.php',
        'App\\Classes\\HtmlElementGeneratorClass' => __DIR__ . '/../..' . '/src/Classes/HtmlElementGeneratorClass.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfacec64a7c9b788d665dc62901d3b83f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfacec64a7c9b788d665dc62901d3b83f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfacec64a7c9b788d665dc62901d3b83f::$classMap;

        }, null, ClassLoader::class);
    }
}
