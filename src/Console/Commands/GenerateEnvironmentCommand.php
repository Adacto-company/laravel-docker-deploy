<?php

namespace Adacto\LaravelDockerDeploy\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class GenerateEnvironmentCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'docker-deploy:generate-environment {environment?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command generates a new environment to deploy a laravel application with a docker stack.';

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
        $environment = $this->argument('environment');
        while (is_null($environment)) {
            $environment = $this->ask('The name of the new environment');
        }

        File::put(base_path('.env.' . $environment), Str::replace('{{environment}}', $environment, File::get(__DIR__ . "/../../../stubs/.env.environment")));
        File::copy(__DIR__ . "/../../../stubs/docker-compose.environment.yml", 'docker-compose.' . $environment . '.yml');
        File::ensureDirectoryExists(docker_environment_path($environment));
        File::copy(__DIR__ . "/../../../stubs/environment/app-install", docker_environment_path($environment, 'app-install'));
        File::copy(__DIR__ . "/../../../stubs/environment/supervisord.conf", docker_environment_path($environment, 'supervisord.conf'));

        $this->info('New environment "'. $environment .'" generated successfully.');
        $this->newLine();
        $this->warn('Remember to update the .env.'. $environment .' file!');

        return 0;
    }
}
