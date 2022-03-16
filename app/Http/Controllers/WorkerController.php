<?php

namespace App\Http\Controllers;
use App\Models\dolgozo;
use DB;

use Illuminate\Http\Request;

class WorkerController extends Controller
{
 public function addWorker(){
     return view("add-worker");

 }

 public function storeWorker(Request $request){
    $worker = new dolgozo;
 
    $worker->name = $request->name;
    $worker->city = $request->city;
    $worker->born = $request->born;
    $worker->salary = $request->salary;
 
    $worker->save();
 
    $request->session()->flash( "success", "Kiírás sikeres" );
    return redirect( "/uj-dolgozo" );
    
 }
 public function getWorker(){
    $workers = dolgozo::all();

    return view("list-worker",[
        "workers"=>$workers
    ]);
        
}
public function deleteWorker( $id ) {
 
    $worker = dolgozo::find( $id );
    $worker->delete();
 
    session()->flash( "success", "Dolgozo törölve" );
    return redirect( "/kiir-dolgozo" );
}

} 
