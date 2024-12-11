<?php

use App\Http\Middleware\Localization;


$app = new Illuminate\Foundation\Application(
    $_ENV['APP_BASE_PATH'] ?? dirname(__DIR__)
);

return $app->configure()
    ->withRouting(
        // Routing config (web.php) location
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function ($middleware) {
        // Define middleware, can be added here globally
        $middleware->alias([
            'localization' => Localization::class, // Add LocalizationMiddleware
        ]);
    })
    ->withExceptions(function ($exceptions) {
        // Exception handling configuration can go here
    })
    ->create();
