<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
        public function index(){
            return view('admin.admin_crm', ['clients' => Client::all()]);

        }
}
