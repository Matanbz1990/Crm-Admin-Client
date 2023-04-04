<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\ClientController;

class ProductController extends Controller
{
    //

        public function indexCrm($client_id){
       
          $client=Client::find($client_id);
           if ($client){
                    $products =$client->products;
                    $tags= ProductController::returnArrayOfTags($client_id,$products);
                    // $filteredProducts= $client->products()->whereHas('tags', function ($query) use ($tags) {
                    // $query->whereIn('name', $tags);
                    // })->get();

                    return view('client.client_crm', [
                    'client' => $client,
                    'products' => $products,
                    'tags'=>$tags,

                ]);

           }
            else {
            abort(404, 'page not found');
            }
       
        }
        public function indexStore($client_id){
       
             $client=Client::find($client_id);
            if ($client){
                $products =$client->products;
            $tags= ProductController::returnArrayOfTags($client_id,$products);
            return view('store.store', [
            'client' => $client,
            'products' => $products,
            'tags'=>$tags,

            ]);
        }
         else {
         abort(404, 'page not found');
         }

        }
        public function show($id){
                $product = Product::filter(request(['id']));
                return $product;
    
        }

         
        //    $products = Product::latest()->filter(request(['tag']))->paginate(6);


         public function returnArrayOfTags($client_id,$products){

                $tags = array();

                foreach ($products as $product) {
                if ($product['client_id'] == $client_id) {
                array_push($tags, $product['tags']);
                }
            }

            $unDuplicateTags=ProductController:: arrangeTags($tags);
 
         return $unDuplicateTags;
         }


        public function create($client_id){

                            // dd($client_id);

                return view('products.create',[
                    'clientId' => $client_id ,        
                    // 'formFields' => $formFields
                ]);
        }
        public function store(Request $request,$client_id){
      

                // $formFields=$request->validate([
                //     'title'=>'required',
                //     'description'=>'required',
                //     'price'=>'required',
                //     'tags'=>'required',
                //     'client_id'=>$client_id,
                // ]);
                //  ProductsController::create($formFields);

                $product=new Product();
                $product->client_id=$client_id;
                $product->title=$request->title;
                $product->description=$request->description;
                $product->price=$request->price;
                $product->tags=$request->tags;

                $product->save();
          


               return redirect('/'.$client_id.'/crm')->with('message','product added successfuly');
        }




    public function arrangeTags($tags){


                function concatenateStrings(array $strings): string {
                return implode(',', $strings);
                }
                $longString=concatenateStrings($tags);


                $separateTagsArray=explode(',',$longString);


                function removeDuplicates($array) {

                $uniqueValues = array_keys(array_flip($array));

                return $uniqueValues;
                }

                $unDuplicateTags=removeDuplicates($separateTagsArray);

                return $unDuplicateTags;

    }

    public function destroy($client_id,$id){
        $product=Product::find($id);
        $product->delete();
        return redirect('/'.$client_id.'/crm');
    }
    public function edit($client_id,$id){
        dd($id);
        $product=Product::find($id);
        // $product->delete();
        return redirect('/'.$client_id.'/crm');
    }




}
