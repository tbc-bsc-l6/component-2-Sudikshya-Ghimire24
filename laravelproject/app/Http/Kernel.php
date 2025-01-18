<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * These middleware are run during every request to your application.
     *
     * @var array<int, class-string|string>
     */
    protected $middleware = [
        // Handles Cross-Origin Resource Sharing (CORS).
        \Illuminate\Http\Middleware\HandleCors::class,

        // Validates the maximum size of POST requests.
        \Illuminate\Foundation\Http\Middleware\ValidatePostSize::class,

        // Converts empty strings in input fields to `null`.
        \Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class,
    ];

    /**
     * The application's route middleware groups.
     *
     * @var array<string, array<int, class-string|string>>
     */
    protected $middlewareGroups = [
        'web' => [
            // Adds queued cookies to the response.
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,

            // Starts the session for web requests.
            \Illuminate\Session\Middleware\StartSession::class,

            // Share validation errors from the session to views.
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,

            // Substitutes bindings in routes.
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],

        'api' => [
            // Uncomment if using Sanctum for API authentication.
            // \Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful::class,

            // Rate limiting for API routes.
            'throttle:api',

            // Substitutes bindings in API routes.
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],
    ];

    /**
     * The application's route middleware.
     *
     * These middleware may be assigned to groups or used individually.
     *
     * @var array<string, class-string|string>
     */
    <?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * These middleware are run during every request to your application.
     *
     * @var array<int, class-string|string>
     */
    protected $middleware = [
        // Handles Cross-Origin Resource Sharing (CORS).
        \Illuminate\Http\Middleware\HandleCors::class,

        // Validates the maximum size of POST requests.
        \Illuminate\Foundation\Http\Middleware\ValidatePostSize::class,

        // Converts empty strings in input fields to `null`.
        \Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class,
    ];

    /**
     * The application's route middleware groups.
     *
     * @var array<string, array<int, class-string|string>>
     */
    protected $middlewareGroups = [
        'web' => [
            // Adds queued cookies to the response.
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,

            // Starts the session for web requests.
            \Illuminate\Session\Middleware\StartSession::class,

            // Share validation errors from the session to views.
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,

            // Substitutes bindings in routes.
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],

        'api' => [
            // Uncomment if using Sanctum for API authentication.
            // \Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful::class,

            // Rate limiting for API routes.
            'throttle:api',

            // Substitutes bindings in API routes.
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],
    ];

    /**
     * The application's route middleware.
     *
     * These middleware may be assigned to groups or used individually.
     *
     * @var array<string, class-string|string>
     */
    protected $routeMiddleware = [
        'auth' => \App\Http\Middleware\AdminMiddleware::class,
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        'cache.headers' => \Illuminate\Http\Middleware\SetCacheHeaders::class,
        'can' => \Illuminate\Auth\Middleware\Authorize::class,
        'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
        'password.confirm' => \Illuminate\Auth\Middleware\RequirePassword::class,
        'signed' => \Illuminate\Routing\Middleware\ValidateSignature::class,
        'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,
        'verified' => \Illuminate\Auth\Middleware\EnsureEmailIsVerified::class,
        'admin' => \App\Http\Middleware\AdminMiddleware::class,

    
        // Custom middleware
        'admin' => \App\Http\Middleware\AdminMiddleware::class,
    ];
    
}

}
