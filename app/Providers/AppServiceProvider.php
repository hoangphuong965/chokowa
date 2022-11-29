<?php

namespace App\Providers;

use App\Repositories\MobileDetect\MobileDetectRepository;
use App\Repositories\MobileDetect\MobileDetectRepositoryInterface;
use App\Repositories\Permission\PermissionRepository;
use App\Repositories\Permission\PermissionRepositoryInterface;
use App\Repositories\Role\RoleRepository;
use App\Repositories\Role\RoleRepositoryInterface;
use App\Repositories\User\UserRepository;
use App\Repositories\User\UserRepositoryInterface;
use App\Repositories\MyPage\MyPageRepository;
use App\Repositories\MyPage\MyPageRepositoryInterface;
use App\Repositories\Nurse\NurseRepository;
use App\Repositories\Nurse\NurseRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            UserRepositoryInterface::class,
            UserRepository::class
        );
        $this->app->singleton(
            RoleRepositoryInterface::class,
            RoleRepository::class
        );
        $this->app->singleton(
            PermissionRepositoryInterface::class,
            PermissionRepository::class
        );
        $this->app->singleton(
            MobileDetectRepositoryInterface::class,
            MobileDetectRepository::class
        );
        $this->app->singleton(
            MyPageRepositoryInterface::class,
            MyPageRepository::class
        );
        $this->app->singleton(
            NurseRepositoryInterface::class,
            NurseRepository::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
