<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use GuzzleHttp\Client;

class TestOAuthTokenRequest extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'oauth:requesttoken';

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
        $guzzle = new Client;

        $response = $guzzle->post('http://127.0.0.1:8000/oauth/token', [
            'form_params' => [
                'grant_type' => 'password',
                'client_id' => '2',
                'client_secret' => 'WioQ7rCInDiqKsy2t6MGgOzopSHQwVUf4p46MNDR',
                'username' => 'l-ywz@hotmail.com',
                'password' => 'mem0ries',
                'scope' => '*',
            ],
        ]);

        $access_token = json_decode((string)$response->getBody(), true)['access_token'];
        $this->line($access_token);


    }
}
