<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CustomerListConsole extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'customer:list {limit=5} {--admin}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Show customer list';

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
        $limit = $this->argument('limit');
        $admin = $this->option('admin');
       
        if ($admin) {
            $password = $this->secret('Please enter your password');
            if ($password = '123456') {
                $customers = \App\Customer::limit($limit)->get();
                $headers = ['ID.', 'Name', 'E-mail', 'remember_token', 'created_at', 'updated_at'];
            } else {
                $this->info('Your password is incorrect');
                exit;
            }
        } else {
            $customers = \App\Customer::select('name' ,'email')->limit($limit)->get();
            $headers = ['Name', 'E-mail'];
        }

        
        $this->table($headers, $customers);
    }
}
