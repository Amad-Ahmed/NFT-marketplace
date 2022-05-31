<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\collections;
use App\Models\users;


class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('account');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($account)
    {
        $user = users::all()->where('WalletAddress', $account)->first();
        $coll = collections::all();
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'https://api.opensea.io/api/v1/assets?order_direction=desc&limit=50&include_orders=false', [
                'headers' => [
                  'Accept' => 'application/json',
                  'X-API-KEY' => '2065401f46a84c019b3945684dbfa278',
                ],
              ]);
        $collected = $response->getBody()->getContents();
        $collected = json_decode($collected, true);
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'https://api.opensea.io/api/v1/assets?order_direction=desc&limit=50&include_orders=false', [
                'headers' => [
                  'Accept' => 'application/json',
                  'X-API-KEY' => '2065401f46a84c019b3945684dbfa278',
                ],
              ]);
        $created = $response->getBody()->getContents();
        $created = json_decode($created, true);
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'https://api.opensea.io/api/v1/assets?order_direction=desc&limit=50&include_orders=false', [
                'headers' => [
                  'Accept' => 'application/json',
                  'X-API-KEY' => '2065401f46a84c019b3945684dbfa278',
                ],
              ]);
        $favorites = $response->getBody()->getContents();
        $favorites = json_decode($favorites, true);
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'https://api.opensea.io/api/v1/assets?order_direction=desc&limit=50&include_orders=false', [
                'headers' => [
                  'Accept' => 'application/json',
                  'X-API-KEY' => '2065401f46a84c019b3945684dbfa278',
                ],
              ]);
        $hidden = $response->getBody()->getContents();
        $hidden = json_decode($hidden, true);
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'https://api.opensea.io/api/v1/assets?order_direction=desc&limit=50&include_orders=false', [
                'headers' => [
                  'Accept' => 'application/json',
                  'X-API-KEY' => '2065401f46a84c019b3945684dbfa278',
                ],
              ]);
        $activity = $response->getBody()->getContents();
        $activity = json_decode($activity, true);
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'https://api.opensea.io/api/v1/assets?order_direction=desc&limit=50&include_orders=false', [
                'headers' => [
                  'Accept' => 'application/json',
                  'X-API-KEY' => '2065401f46a84c019b3945684dbfa278',
                ],
              ]);
        $offers = $response->getBody()->getContents();
        $offers = json_decode($offers, true);
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'https://api.opensea.io/api/v1/assets?order_direction=desc&limit=50&include_orders=false', [
                'headers' => [
                  'Accept' => 'application/json',
                  'X-API-KEY' => '2065401f46a84c019b3945684dbfa278',
                ],
              ]);
        $listing = $response->getBody()->getContents();
        $listing = json_decode($listing, true);
        return view('account')->with('user', $user)->with('coll', $coll)
        ->with('collected', $collected['assets'])
        ->with('created', $created['assets'])
        ->with('favorites', $favorites['assets'])
        ->with('hidden', $hidden['assets'])
        ->with('activity', $activity['assets'])
        ->with('offers', $offers['assets'])
        ->with('listing', $listing['assets']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
