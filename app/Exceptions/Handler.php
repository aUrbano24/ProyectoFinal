<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
<<<<<<< HEAD
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
=======
     * The list of the inputs that are never flashed to the session on validation exceptions.
>>>>>>> 0b4b265a726d64cd767a74b5c052d962eaab9194
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
<<<<<<< HEAD
     *
     * @return void
     */
    public function register()
=======
     */
    public function register(): void
>>>>>>> 0b4b265a726d64cd767a74b5c052d962eaab9194
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }
}
