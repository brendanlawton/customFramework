<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit178eb876dbb8d4d0434895f957930f5e
{
    public static $classMap = array (
        'App\\Controllers\\PagesController' => __DIR__ . '/../..' . '/app/controllers/PagesController.php',
        'App\\Controllers\\UsersController' => __DIR__ . '/../..' . '/app/controllers/UsersController.php',
        'App\\Core\\App' => __DIR__ . '/../..' . '/core/App.php',
        'App\\Core\\Request' => __DIR__ . '/../..' . '/core/Request.php',
        'App\\Core\\Router' => __DIR__ . '/../..' . '/core/Router.php',
        'App\\Models\\Project' => __DIR__ . '/../..' . '/app/models/Project.php',
        'ComposerAutoloaderInit178eb876dbb8d4d0434895f957930f5e' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInit178eb876dbb8d4d0434895f957930f5e' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Connection' => __DIR__ . '/../..' . '/core/database/Connection.php',
        'QueryBuilder' => __DIR__ . '/../..' . '/core/database/QueryBuilder.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit178eb876dbb8d4d0434895f957930f5e::$classMap;

        }, null, ClassLoader::class);
    }
}
