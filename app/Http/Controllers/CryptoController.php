<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CryptoController extends Controller
{
    //

    public function getData(Request $request){
        $response = Http::get("https://api.nomics.com/v1/currencies/ticker?key=596df149997ca17c4b2a77e94e38330fe012e8a3&per-page=100&page=1&convert=INR");
        return view('index', ['response'=> $response->json()]);
    }

    public function about(Request $request){
        return view('about');
    }


    //"https://api.nomics.com/v1/currencies/ticker?key=596df149997ca17c4b2a77e94e38330fe012e8a3&ids=BTC,ETH,XRP&interval=1d,30d&convert=EUR&per-page=100&page=1"

    //https://api.nomics.com/v1/currencies/ticker?key=596df149997ca17c4b2a77e94e38330fe012e8a3
}
