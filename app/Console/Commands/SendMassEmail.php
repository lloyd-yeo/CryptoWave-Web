<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\User;
use Mail;
use App\Mail\MinerPatchEmail;

class SendMassEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:mass {email?}';

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
        $users = NULL;
        if ($this->argument('email') !== NULL) {
            $users = User::where('email', $this->argument('email'))->get();
        } else {
            $users = User::where('created_at', '>=', '2017-11-16 00:00:00')->get();
        }

        foreach ($users as $user) {
            $this->line("Sending out email to " . $user->email);
            Mail::to($user)->send(new MinerPatchEmail($user));
        }
    }
}
