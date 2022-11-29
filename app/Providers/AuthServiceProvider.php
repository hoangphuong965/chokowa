<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\MstPermission;
use App\Models\User;
use App\Repositories\Permission\PermissionRepositoryInterface;
use Illuminate\Auth\Access\Response;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\URL;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @param PermissionRepositoryInterface $permissionRepo
     * @return void
     * @throws \Exception
     */
    public function boot(PermissionRepositoryInterface $permissionRepo)
    {
        $this->registerPolicies();

        $this->permissionRepo = $permissionRepo;

        if (!$this->app->runningInConsole()) {
            $allPermissions = $this->permissionRepo->getAll();
            foreach ($allPermissions as $permission) {
                if ($permission instanceof MstPermission) {
                    Gate::define($permission->name, function (User $user) use ($permission) {
                        return $user->hasPermission($permission->name)
                            ? Response::allow()
                            : Response::deny(__('permission.unauthorized', ['permission'=>$permission->display_name]));
                    });
                }
            }
        }

        VerifyEmail::createUrlUsing(function ($notifiable) {
            return URL::temporarySignedRoute(
                'nurse.verification.verify',
                Carbon::now()->addMinutes(Config::get('auth.verification.expire', 60)),
                [
                    'id' => $notifiable->getKey(),
                    'hash' => sha1($notifiable->getEmailForVerification()),
                ]
            );
        });
    }
}
