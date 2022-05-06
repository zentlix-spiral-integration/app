<?php

declare(strict_types=1);

use Symfony\Component\Translation\Dumper;
use Symfony\Component\Translation\Loader;

return [
    'locale'         => env('LOCALE', 'ua'),
    'fallbackLocale' => env('LOCALE', 'en'),
    'directory'      => env('locale', directory('app') . 'translations' . DIRECTORY_SEPARATOR),
    'directories'    => [],
    'autoRegister'   => env('DEBUG', true),
    'loaders'        => [
        'php'  => Loader\PhpFileLoader::class,
        'po'   => Loader\PoFileLoader::class,
        'csv'  => Loader\CsvFileLoader::class,
        'json' => Loader\JsonFileLoader::class,
    ],
    'dumpers'        => [
        'php'  => Dumper\PhpFileDumper::class,
        'po'   => Dumper\PoFileDumper::class,
        'csv'  => Dumper\CsvFileDumper::class,
        'json' => Dumper\JsonFileDumper::class,
    ],
    'domains'        => [
        'messages' => ['*'],
    ],
];
