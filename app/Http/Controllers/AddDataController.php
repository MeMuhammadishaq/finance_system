<?php

namespace App\Http\Controllers;

use App\Models\Add_data;
use Illuminate\Http\Request;

class AddDataController extends Controller
{
    //
    public function store_costomer_data(Request $request){
        // dd($request->all());
       $store_costomer_data = new Add_data();
       $store_costomer_data->amount = $request['amount'];
       $store_costomer_data->peyment_type = $request['peyment_type'];
       $store_costomer_data->costomer_id = $request['costomer_id'];
       $store_costomer_data->save();
       return redirect(route('add_data', $request['costomer_id']))->with('success', "okay     "); 
    }

}
