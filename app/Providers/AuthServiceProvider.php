<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Access\Response;

use App\Models\User;
use App\Models\Demandeinscription;
use App\Models\Formation;
use App\Models\Poste;
use App\Models\Role;
use App\Models\Salarie;
use App\Models\Stage;
use App\Policies\DemandeinscriptionPolicy;
use App\Policies\FormationPolicy;
use App\Policies\PostePolicy;
use App\Policies\PostPolicy;
use App\Policies\SalariePolicy;
use App\Policies\StagePolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        Poste::class => PostePolicy::class,
        Post::class => PostPolicy::class,
        Formation::class => FormationPolicy::class,
        Salarie::class => SalariePolicy::class,
        Stage::class => StagePolicy::class,
        Demandeinscription::class => DemandeinscriptionPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        //
    }
}
