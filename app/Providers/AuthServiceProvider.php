<?php

namespace App\Providers;

<<<<<<< HEAD
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
=======
// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
>>>>>>> 0b4b265a726d64cd767a74b5c052d962eaab9194

class AuthServiceProvider extends ServiceProvider
{
    /**
<<<<<<< HEAD
     * The policy mappings for the application.
=======
     * The model to policy mappings for the application.
>>>>>>> 0b4b265a726d64cd767a74b5c052d962eaab9194
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
<<<<<<< HEAD
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
=======
        //
>>>>>>> 0b4b265a726d64cd767a74b5c052d962eaab9194
    ];

    /**
     * Register any authentication / authorization services.
<<<<<<< HEAD
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

=======
     */
    public function boot(): void
    {
>>>>>>> 0b4b265a726d64cd767a74b5c052d962eaab9194
        //
    }
}
