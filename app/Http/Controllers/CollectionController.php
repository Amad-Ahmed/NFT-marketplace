<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\collection;
use Illuminate\Support\Facades\Http;
use App\Models\collections;
use Illuminate\Http\Client\Response;

class CollectionController extends Controller
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
    public function create()
    {
        //
    }

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
    public function show($category)
    {
        // $client = new \GuzzleHttp\Client();

        

        // $json = $response->getBody()->getContents();
        // echo $json; //prirnts whole JSON object
        // $stats = json_decode($json, true);
        // echo $stats['next']; //prints the value of 'next' key

        $collections = collections::all();
        // $response = Http::withHeaders([
        //     'Accept' => 'application/json',
        //     'X-API-KEY' => '2065401f46a84c019b3945684dbfa278'
        // ])->get('https://api.opensea.io/api/v1/collection/'.$collections[0]->slugName.'/stats', [
        // ]);
        

        // for ($x = 0; $x < $collections->count(); $x++) {


            

        //     // $response = $client->request('GET', 'https://api.opensea.io/api/v1/collection/'.$collections[$x]->slugName.'/stats', [
        //     //     'headers' => [
        //     //       'Accept' => 'application/json',
        //     //     ],
        //     //   ]);
        //     // response()->json($response);
        //     // echo $response->getStatusCode();
        //     //   if($response->successful()) {
        //     //       echo $collection[$x]->Name.' is working';
        //     //   }
        //     //   else {
        //     //     echo $collection[$x]->Name.' is not working';
        //     //   }
        //     // echo '<a href="opensea.io/collection/{{$collections->slugName}}">opensea.io/collection/{{$collections->slugName}}</a>';
        //     // echo '<a href="https://opensea.io/collection/'.$collections[$x]->slugName.'">opensea.io/collection/'.$collections[$x]->slugName.'</a><br>';
        // }

        if($category=='art') {
            $collection = collection::all()->where('Category', 'Art')->first();
            $collections = collections::all()->where('Category', 'Art');
            return view('collection', ['title' => 'Explore Art NFTS | Astra'])->with('collection', $collection)->with('collections', $collections);
        }
        else if($category=='collectibles') {
            $collection = collection::all()->where('Category', 'Collectibles')->first();
            $collections = collections::all()->where('Category', 'Collectibles');
            
            return view('collection', ['title' => 'Explore Collectibles NFTS | Astra'])->with('collection', $collection)->with('collections', $collections);
        }
        else if($category=='domain-names') {
            $collection = collection::all()->where('Category', 'Domain Names')->first();
            $collections = collections::all()->where('Category', 'Domain Names');
            return view('collection', ['title' => 'Explore Domain Names NFTS | Astra'])->with('collection', $collection)->with('collections', $collections);
        }
        else if($category=='music') {
            $collection = collection::all()->where('Category', 'Music')->first();
            $collections = collections::all()->where('Category', 'Music');
            return view('collection', ['title' => 'Explore Music NFTS | Astra'])->with('collection', $collection)->with('collections', $collections);
        }
        else if($category=='photography') {
            $collection = collection::all()->where('Category', 'Photography')->first();
            $collections = collections::all()->where('Category', 'Photography');
            return view('collection', ['title' => 'Explore Photography NFTS | Astra'])->with('collection', $collection)->with('collections', $collections);
        }
        else if($category=='sports') {
            $collection = collection::all()->where('Category', 'Sports')->first();
            $collections = collections::all()->where('Category', 'Sports');
            return view('collection', ['title' => 'Explore Sports NFTS | Astra'])->with('collection', $collection)->with('collections', $collections);
        }
        else if($category=='trading-cards') {
            $collection = collection::all()->where('Category', 'Trading')->first();
            $collections = collections::all()->where('Category', 'Trading');
            return view('collection', ['title' => 'Explore Trading Cards NFTS | Astra'])->with('collection', $collection)->with('collections', $collections);
        }
        else if($category=='utility') {
            $collection = collection::all()->where('Category', 'Utility')->first();
            $collections = collections::all()->where('Category', 'Utility');
            return view('collection', ['title' => 'Explore Utility Card NFTS | Astra'])->with('collection', $collection)->with('collections', $collections);
        }
        else if($category=='virtual-worlds') {
            $collection = collection::all()->where('Category', 'Virtual')->first();
            $collections = collections::all()->where('Category', 'Virtual');
            return view('collection', ['title' => 'Explore Virtual Worlds NFTS | Astra'])->with('collection', $collection)->with('collections', $collections);
        }
        // else {
        //     return view('errors.404');
        // }
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
