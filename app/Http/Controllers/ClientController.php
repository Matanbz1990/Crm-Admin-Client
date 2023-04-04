<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\ProductController;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ClientController extends Controller
{

    public function index(){

            $clients=Client::all();

        return view('home' ,['clients'=> $clients]);
        
    }

    public function show($client_id){
         $client=Client::find($client_id);

         return $client;
    }



  
    

    
}
