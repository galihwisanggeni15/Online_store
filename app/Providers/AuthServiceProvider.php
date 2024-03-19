<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
<<<<<<< HEAD
        //
=======
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
>>>>>>> c9349bd851c4ed29e8778889950d66c0e5b802ab
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
<<<<<<< HEAD
=======
        $this->registerPolicies();

>>>>>>> c9349bd851c4ed29e8778889950d66c0e5b802ab
        //
    }
}
