<?php

namespace App\Http\Controllers\Country;

use App\Http\Controllers\Controller;
use App\Models\CountryModel;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;

class Country extends Controller
{

    public function index()
    {
        return response()->json(CountryModel::get(),200);
    }


    public function create(Request $request)
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      /*  $rules= [
            'name' => 'required',
            'iso' => 'required',
        ];
        $validator = Validator:: make($request->all(),$rules);
        if($validator->fails()){
            return response()->json($validator->errors(),400);
        }*/
        $country = CountryModel::create($request->all());
        return response()->json($country,201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $country = CountryModel::find($id);

        if(is_null($country)){
            return Response()->json('Record Not found !',404);
        }
        return response()->json($country,200);
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        $country= CountryModel::find($id);
        if(is_null($country)){
            return Response()->json('Record Not found !',404);
        }
        $country ->update($request->all());
        return response()->json($country,200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $country= CountryModel::find($id);
        if(is_null($country)){
            return Response()->json(["message"=>"Record Not found !"],404);
        }
        $country ->delete();
        return response()->json(null,204);
    }
}
