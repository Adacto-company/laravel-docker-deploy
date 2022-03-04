<?php

namespace Adacto\LaravelDockerDeploy\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class InstallCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'docker-deploy:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command installs the required files to deploy a laravel application with a docker stack.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        File::copyDirectory(__DIR__.'/../../../files/docker', docker_path());
        File::copy(__DIR__.'/../../../files/.env.local', base_path('.env.local'));
        File::copy(__DIR__.'/../../../files/.env.production', base_path('.env.production'));
        File::copy(__DIR__.'/../../../files/docker-compose.yml', base_path('docker-compose.yml'));
        File::copy(__DIR__.'/../../../files/docker-compose.local.yml', base_path('docker-compose.local.yml'));
        File::copy(__DIR__.'/../../../files/docker-compose.production.yml', base_path('docker-compose.production.yml'));

        $this->info('Docker deploy files installed successfully.');
        $this->info('Generated environments local and production.');
        $this->newLine();
        $this->warn('Remember to update the .env.local and .env.production files!');

        return 0;
    }
}
