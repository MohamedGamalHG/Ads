<?php

namespace App\Console\Commands;

use App\Models\Category;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mail:night';
    //protected $signature = 'hour:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';
    //protected $description = ‘Send an hourly email to all the users’;

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
        $users = User::get();
        foreach ($users as $user)
        {
            Mail::raw("This is automatically generated Hourly Update", function($message) use ($user)
            {
                $message->from('hamza@gmail.com');
                $message->to($user->email)->subject('Hourly Update');
            });
        }
        $this->info('At 8pm send Mail');
    }
}
