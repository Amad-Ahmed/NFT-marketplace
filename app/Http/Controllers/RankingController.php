<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\collections;
use App\Models\ranking_filters;

class RankingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // echo 123456764543;
        ranking_filters::where('ID',1)->update(['Category'=>"Art"]);
        ranking_filters::where('ID',1)->update(['Owner'=>"All Owners"]);
        ranking_filters::where('ID',1)->update(['Item'=>"All Items"]);
        $filter=ranking_filters::all()->first();
        $List=collections::all();
        $c= $filter['Category'];
        $o= $filter['Owner'];
        $i= $filter['Item'];
        $Count=1;
        return view('rankings', compact('List','c','o','i','Count'));
    }

    public static function store(Request $request)
    {
        $Count=1;
        $current=ranking_filters::all()->where('ID',1)->first();
        $c=$current['Category'];
        $i=$current['Item'];
        $o=$current['Owner'];
        $item_lower_val=0;
        $item_upper_val=NULL;
        $owner_lower_val=0;
        $owner_upper_val=NULL;
        if(isset($request->a)){
            $c=$request['a'];
            ranking_filters::where('ID',1)->update(['Category'=>$c]);
        }
        else if(isset ($request->b)){
            $i=$request['b'];
            ranking_filters::where('ID',1)->update(['Item'=>$i]);
            
        }
        else if(isset($request->c)){
            $o=$request['c'];
            ranking_filters::where('ID',1)->update(['Owner'=>$o]);
            
        }
        switch($i){
            case 'All Items': break;
            case 'Items: 0K - 1K' :
                $item_lower_val=0;
                $item_upper_val=1000;
                break;
            case 'Items: 1K - 2K' :
                $item_lower_val=1000;
                $item_upper_val=2000;
                break;
            case 'Items: 2K - 3K' :
                $item_lower_val=2000;
                $item_upper_val=3000;
                break;
            case 'Items: 3K - 4K' :
                $item_lower_val=3000;
                $item_upper_val=4000;
                break;
            case 'Items &gt 4K' :
                $item_lower_val=4000;
                $item_upper_val=NULL;
                break;
        }
        switch($o){
            case 'All Owners': break;
            case 'Owners: 0K - 1K' :
                $owner_lower_val=0;
                $owner_upper_val=1000;
                break;
            case 'Owners: 1K - 2K' :
                $owner_lower_val=1000;
                $owner_upper_val=2000;
                break;
            case 'Owners: 2K - 3K' :
                $owner_lower_val=2000;
                $owner_upper_val=3000;
                break;
            case 'Owners: 3K - 4K' :
                $owner_lower_val=3000;
                $owner_upper_val=4000;
                break;
            case 'Owners &gt 4K' :
                $owner_lower_val=4000;
                $owner_upper_val=NULL;
                break;
        }
        //query
        $List=collections::all();
        if($c=="All Categories"){
        }
        else{
            $List=$List->where('Category',$c);
        }

        if($i=='All Items'){
        }
        else if($i == 'Items > 4K'){
            $List=$List->where('Total','>', 4000);
        }
        else{
            $List=$List->whereBetween('Total', [$item_lower_val, $item_upper_val]);
        }

        if($o=='All Owners'){
        }
        else if($o == 'Owners > 4K'){
            $List=$List->where('Owners','>', 4000);
        }
        else{
            $List=$List->whereBetween('Owners', [$owner_lower_val, $owner_upper_val]);
        }
        return view('rankings', compact('List','c','o','i','Count'));
    }

}
