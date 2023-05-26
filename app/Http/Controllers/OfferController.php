<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Offer;

class OfferController extends Controller
{
    public function index(Request $request, int $id){

        $offer = Offer::where('id', $id)->get();
        if(count($offer) == 0){
            return view("404");
        }
        return view('offer', ['offer' =>  $offer]);
    }

}
