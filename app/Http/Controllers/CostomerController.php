<?php

namespace App\Http\Controllers;
use App\Models\Add_data;
use App\Models\Costomer;
use Faker\Core\Color;
use Illuminate\Http\Request;

use function Termwind\style;

class CostomerController extends Controller
{
    //
    public function view(){
        return view('add-costomer');
    }

    public function insert(Request $request){
        $insert =new Costomer();
        $insert->name = $request['name'];
        $insert->number = $request['number'];
        $insert->save();
        return redirect(route('insert'));
    }

    public function read(Request $request){
        $search = $request['search']?? "";
       $data = add_data::get();
        $totalCredit = $data->where('peyment_type', 'Credit')->sum('amount');
        
        $totalDebit = $data->where('peyment_type', 'Debit')->sum('amount');
        
        $totalAmount = $totalCredit-$totalDebit;
    
        $totalCredit = $totalCredit - $totalDebit - $totalDebit;

       $read = Costomer::where('name','LIKE','%'.$search.'%')->get(); 
       return view('welcome',compact('read','totalCredit','totalDebit','totalAmount','search')); 
    }


    public function add_data($id ,$name){
        $data = add_data::where('costomer_id',$id)->get();
        $total = 0;
        // $totalCredit = $data->where('peyment_type', 'Credit')->sum('amount');
        // $totalDebit = $data->where('peyment_type', 'Debit')->sum('amount');
        // $remaining = $totalCredit-$totalDebit;
        // return view('add-data')->with('id', $id);
       
        foreach($data as $item){
            if($item->peyment_type == 'Credit'){
                $total = $total + $item->amount;
            }else{
                $total = $total - $item->amount;
            } 
        }
        return view('add-data',compact('id','data','total','name'));
    }
    






}