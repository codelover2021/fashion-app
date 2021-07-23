<?php

namespace App\Http\Controllers;

use App\Conversations\ExampleConversation;
use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;

use GuzzleHttp\Client;

class FilterController extends Controller
{
    public function handle()
    {
        $botman = app('botman');

        // Simple respond method
        $botman->hears('Hello', function (BotMan $bot) {
            $bot->reply('Hi there :)');
        });

        $botman->hears('Give me {currency} rates', function ($bot, $currency) {
            $bot->types();
            $results = $this->getCurrency($currency);
            $bot->reply($results);
        });

        $botman->fallback(function($bot) {
            $bot->types();
            $bot->reply('Sorry, I did not understand these commands. Please retype again...');
        });

        $botman->listen();
    }

    public function getCurrency($currency)
    {
        $client = new Client();
        $uri = 'http://api.fixer.io/latest?base='.$currency;
        $response = $client->get($uri);
        $results = json_decode($response->getBody()->getContents());

        $date = date('d F Y', strtotime($results->date));
        $data = "Here's the exchange rates based on ".$currency." currency\nDate: ".$date."\n";
        foreach($results->rates as $k => $v) {
            $data .= $k." - ".$v."\n";
        }

        return $data;
    }
    public function designers()
    {
        return view('designers');
    }
}
