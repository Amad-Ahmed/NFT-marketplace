<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\collections;

class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
    public function show($slugName)
    {
        $collection = collections::all()->where('slugName', $slugName);

        if(count($collection) > 0) {
            $client = new \GuzzleHttp\Client();

            $apiquery = "?";
            for($x = 0; $x<30; $x++) {
                $randomNum = rand(1, $collection->first()->Total);
                $apiquery .= 'token_ids='.$randomNum.'&';
            }

            $webapi = 'https://api.opensea.io/api/v1/assets'.$apiquery.'asset_contract_address='.$collection->first()->address.'&limit=50';
            $response = $client->request('GET', $webapi, [
                'headers' => [
                  'Accept' => 'application/json',
                  'X-API-KEY' => '2065401f46a84c019b3945684dbfa278',
                ],
              ]);

            $json = $response->getBody()->getContents();
            $json = json_decode($json, true);

            return view('detail', ['title' => $collection->first()->Name.' - Collection | Astra'])->with('collection', $collection->first())->with('json', $json['assets']);
        }
        else {
            abort(404);
            // return view('minimal', ['title' => __('Forbidden'), 'code' => '404', 'message' => 'not found']);
            // return view('minimal')->with('404', 'title');
        }
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
