<?php

namespace JhomeWu\LaravelErrorCollector\Console;

use Illuminate\Console\Command;

class InstallCommand extends Command
{
    protected $signature = 'laravel-error-collector:install';

    public $description = 'install laravel-error-collector package functionality';

    public function handle()
    {
        // $this->call('migrate');  // Need to migrate when install
    }
}
