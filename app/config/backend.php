<?php

declare(strict_types=1);

use Spiral\Cycle\DataGrid\Interceptor\GridInterceptor;
use Spiral\Cycle\Interceptor\CycleInterceptor;
use Spiral\Domain\FilterInterceptor;
use Spiral\Domain\GuardInterceptor;
use Spiral\Keeper\Middleware\LoginMiddleware;
use Zentlix\Core\UI\Http\Web\Controller\Backend\DashboardController;
use Spiral\Keeper\Bootloader as Keeper;

/**
 * -------------------------------------------------------------------------
 *  Backend Panel configuration
 * -------------------------------------------------------------------------
 *
 * Here you can customize backend panel URL address or other configuration parameters.
 *
 */
return [
    'routePrefix' => '/' . env('BACKEND_URL', 'backend'),
    'routeDefaults' => [
        'controller' => DashboardController::class,
    ],
    'loginView' => 'users:backend/login',
    'middleware' => [
        LoginMiddleware::class,
    ],
    'modules' => [
        Keeper\SitemapBootloader::class,
        Keeper\AnnotatedBootloader::class,
    ],
    'interceptors' => [
        CycleInterceptor::class,
        GuardInterceptor::class,
        FilterInterceptor::class,
        GridInterceptor::class,
    ],
];
