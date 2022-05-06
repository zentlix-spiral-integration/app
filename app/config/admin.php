<?php

declare(strict_types=1);

use Spiral\Cycle\DataGrid\Interceptor\GridInterceptor;
use Spiral\Cycle\Interceptor\CycleInterceptor;
use Spiral\Domain\FilterInterceptor;
use Spiral\Domain\GuardInterceptor;
use Spiral\Keeper\Middleware\LoginMiddleware;
use Zentlix\Core\UI\Http\Web\Controller\Admin\DashboardController;
use Spiral\Keeper\Bootloader as Keeper;

/**
 * -------------------------------------------------------------------------
 *  Admin Panel configuration
 * -------------------------------------------------------------------------
 *
 * Here you can customize admin panel URL address or other configuration parameters.
 *
 */
return [
    'routePrefix' => '/' . env('ADMIN_URL', 'admin'),
    'routeDefaults' => [
        'controller' => DashboardController::class,
    ],
    'loginView' => 'users:admin/login',
    'middleware' => [
        LoginMiddleware::class,
    ],
    'modules' => [
        Keeper\UIBootloader::class,
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
