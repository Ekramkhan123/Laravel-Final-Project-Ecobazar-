<?php

use App\Http\Middleware\Admin;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Spatie\Permission\Middleware\PermissionMiddleware;
use Spatie\Permission\Middleware\RoleMiddleware;
use Spatie\Permission\Middleware\RoleOrPermissionMiddleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {

        $middleware->alias([
            'admin' => Admin::class,
            'role' => RoleMiddleware::class,
            'permission' => PermissionMiddleware::class,
            'role_or_permission' => RoleOrPermissionMiddleware::class,
        ]);

        $middleware->validateCsrfTokens(except: [
            '/success',
            '/cancel',
            '/fail',
            '/ipn',
            '/pay-via-ajax',
        ]);

        $middleware->redirectGuestsTo(function ($request) {

            // Frontend customer routes
            if ($request->is('customer/*')) {
                return route('frontend.customer.login');
            }

            // Backend / admin login
            return route('login');
        });
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })
    ->create();
