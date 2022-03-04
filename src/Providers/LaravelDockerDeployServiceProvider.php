<?php

namespace Adacto\LaravelDockerDeploy\Providers;

use Adacto\LaravelDockerDeploy\Console\Commands\GenerateEnvironmentCommand;
use Adacto\LaravelDockerDeploy\Console\Commands\InstallCommand;
use Illuminate\Support\ServiceProvider;

class LaravelDockerDeployServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                InstallCommand::class,
                GenerateEnvironmentCommand::class,
            ]);
        }
    }
}
