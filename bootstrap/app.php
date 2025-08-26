<?php

use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\WargaMiddleware;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        $middleware->appendToGroup(group:'admin', middleware: [
            AdminMiddleware::class,
        ]);
        $middleware->appendToGroup(group:'warga', middleware:[
            WargaMiddleware::class,
        ]);
        //
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
