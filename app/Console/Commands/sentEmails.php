<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\User;

class sentEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:send{user}{--queue}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        echo 'The email is sending to:'.$this->argument('user').' and the option is:'. $this->option('queue');
        $this->info('information on the screen');
    }
}
