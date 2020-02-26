<?php

namespace App\Http\Controllers\Country;

use App\Http\Controllers\Controller;
use http\Client\Response;
use Illuminate\Http\Request;
use App\Models\CountryModel;

class CountryController extends Controller
{
   public function country(){

   }
    public function countryByID($id){

    }

    public function countrySave(Request $request){
       $country = CountryModel::create($request->all());
        return response()->json($country,201);
    }
    public function countryUpdate(Request $request,$id){

    }
    public function countryDelete(Request $request,$id){

    }

}
