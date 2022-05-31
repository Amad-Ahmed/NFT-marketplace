<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ActivityController extends Controller
{
    public static function all(){
      $client = new \GuzzleHttp\Client();

        $response = $client->request('GET', 'https://api.opensea.io/api/v1/events', [
          'headers' => [
            'Accept' => 'application/json',
            'X-API-KEY' => '2065401f46a84c019b3945684dbfa278',
          ],
        ]);
        $json = $response->getBody()->getContents();
        $x= json_decode($json, true);
        $json_pretty = json_encode($x, JSON_PRETTY_PRINT);
        $asset_events=$x['asset_events'];
        $num_assets=count($asset_events);
        //echo $num_assets;
        //echo 'collection name:: '.$x['asset_events'][$num_assets-1]['asset']['collection']['name'];
        //echo 'collection name:: '.$x['asset_events'][$num_assets-1]['asset']['collection']['name'];
        //echo "<pre>".$json_pretty."<pre/>";
        return view('activity',compact('x','num_assets'));

    }
    public static function listings(){
      $client = new \GuzzleHttp\Client();

        $response = $client->request('GET', 'https://api.opensea.io/api/v1/events?event_type=bid_entered', [
          'headers' => [
            'Accept' => 'application/json',
            'X-API-KEY' => '2065401f46a84c019b3945684dbfa278',
          ],
        ]);
        $json = $response->getBody()->getContents();
        $x= json_decode($json, true);
        $json_pretty = json_encode($x, JSON_PRETTY_PRINT);
        $asset_events=$x['asset_events'];
        $num_assets=count($asset_events);
        //echo $num_assets;
        //echo 'collection name:: '.$x['asset_events'][$num_assets-1]['asset']['collection']['name'];
        //echo 'collection name:: '.$x['asset_events'][$num_assets-1]['asset']['collection']['name'];
        return view('activity',compact('x','num_assets'));

    }public static function sales(){
      $client = new \GuzzleHttp\Client();

        $response = $client->request('GET', 'https://api.opensea.io/api/v1/events?event_type=successful', [
          'headers' => [
            'Accept' => 'application/json',
            'X-API-KEY' => '2065401f46a84c019b3945684dbfa278',
          ],
        ]);
        $json = $response->getBody()->getContents();
        $x= json_decode($json, true);
        $json_pretty = json_encode($x, JSON_PRETTY_PRINT);
        $asset_events=$x['asset_events'];
        $num_assets=count($asset_events);
        return view('activity',compact('x','num_assets'));

    }public static function offers(){
      $client = new \GuzzleHttp\Client();

        $response = $client->request('GET', 'https://api.opensea.io/api/v1/events?event_type=offer_entered', [
          'headers' => [
            'Accept' => 'application/json',
            'X-API-KEY' => '2065401f46a84c019b3945684dbfa278',
          ],
        ]);
        $json = $response->getBody()->getContents();
        $x= json_decode($json, true);
        $json_pretty = json_encode($x, JSON_PRETTY_PRINT);
        $asset_events=$x['asset_events'];
        $num_assets=count($asset_events);
        return view('activity',compact('x','num_assets'));

    }public static function transfers(){
      $client = new \GuzzleHttp\Client();

        $response = $client->request('GET', 'https://api.opensea.io/api/v1/events?event_type=transfer', [
          'headers' => [
            'Accept' => 'application/json',
            'X-API-KEY' => '2065401f46a84c019b3945684dbfa278',
          ],
        ]);
        $json = $response->getBody()->getContents();
        $x= json_decode($json, true);
        $json_pretty = json_encode($x, JSON_PRETTY_PRINT);
        $asset_events=$x['asset_events'];
        $num_assets=count($asset_events);
        return view('activity',compact('x','num_assets'));
    }


}
