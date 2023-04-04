<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Admin;
use App\Models\Client;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        Admin::create(
        ['name' => 'matan', 'id' => 99,'email'=>'matan@gmail.com'],
        );
        Client::create(
        ['name' => 'matan', 'id' => 1, 'description' => "smart",'store_name'=>"the best store",'email'=>'matan@gmail.com'],
        );
         Client::create(
            ['name' => 'nadav', 'id' => 2, 'description' => "kind",'store_name'=>"good
         place",'email'=>'nadav@gmail.com']
         );

         Product::create(['client_id' => 1, 'title' => 'shirt', 
         'id' => 11, 'description' =>"white",'price'=>20.99,'tags'=>'clothes,wear-things,men-clothes']);
         Product::create(['client_id' => 1, 'title' => 'hat',
         'id' => 33, 'description' =>"blue",'price'=>7.99,'tags'=>'clothes,wear-things,unis-clothes']);

         Product::create(['client_id' => 2, 'title' => 'pants', 
         'id' => 22, 'description' =>"black",'price'=>39.99,'tags'=>'clothes,wear-things,men-clothes']);

         Product::create(['client_id' => 1, 'title' => 'tesla', 
         'id' => 44, 'description' =>"electric car",'price'=>100.99,'tags'=>'cars']);
    }
}
