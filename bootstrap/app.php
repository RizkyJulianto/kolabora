<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'AuthIsLogin' => \App\Http\Middleware\AuthIsLogin::class,
            'PreventBackLogout' => \App\Http\Middleware\PreventBackLogout::class,
            'Admin' => \App\Http\Middleware\IsAdminRole::class,
            'Users' => \App\Http\Middleware\IsUsersRole::class,
            'Company' => \App\Http\Middleware\IsCompanyRole::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();