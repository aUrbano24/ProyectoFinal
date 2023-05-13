<?php

namespace App\Http\Middleware;

use Illuminate\Http\Middleware\TrustHosts as Middleware;

class TrustHosts extends Middleware
{
    /**
     * Get the host patterns that should be trusted.
     *
     * @return array<int, string|null>
     */
<<<<<<< HEAD
    public function hosts()
=======
    public function hosts(): array
>>>>>>> 0b4b265a726d64cd767a74b5c052d962eaab9194
    {
        return [
            $this->allSubdomainsOfApplicationUrl(),
        ];
    }
}
