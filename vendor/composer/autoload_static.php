<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit64eef85f79681d3cf49e36bd0273700a
{
    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'PivotSecurity\\' => 
            array (
                0 => __DIR__ . '/../..' . '/lib',
            ),
        ),
        'H' => 
        array (
            'Httpful' => 
            array (
                0 => __DIR__ . '/..' . '/nategood/httpful/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit64eef85f79681d3cf49e36bd0273700a::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
