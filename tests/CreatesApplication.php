<?php

namespace Tests;

use Illuminate\Contracts\Console\Kernel;
<<<<<<< HEAD
=======
use Illuminate\Foundation\Application;
>>>>>>> 0b4b265a726d64cd767a74b5c052d962eaab9194

trait CreatesApplication
{
    /**
     * Creates the application.
<<<<<<< HEAD
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
=======
     */
    public function createApplication(): Application
>>>>>>> 0b4b265a726d64cd767a74b5c052d962eaab9194
    {
        $app = require __DIR__.'/../bootstrap/app.php';

        $app->make(Kernel::class)->bootstrap();

        return $app;
    }
}
