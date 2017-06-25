<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class PlayersListConsole extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'players:list';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'List Player of System';

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
     * @return mixed
     */
    public function handle()
    {
        $this->info('Hello Players'); 
    }
}
