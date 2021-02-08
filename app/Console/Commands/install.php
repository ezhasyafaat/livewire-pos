<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class install extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install Database';

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
        $this->line('Optimizing..');
        $this->callSilent('optimize');

        /********** MIGRATION **********/
        $this->line('========= Setup database =========');
        $this->callSilent('migrate:fresh', [
            '--seed' => true,
        ]);

        /********** PASSPORT **********/
        $this->line('========= Setup OAuth 2 =========');
        $this->callSilent('passport:install', [
            '--force' => true,
        ]);

        /********** OPTIMIZE **********/
        $this->line('Finishing..');
        $this->callSilent('optimize');

        /********** FINISH **********/
        $this->info('Finished!');
    }
}
