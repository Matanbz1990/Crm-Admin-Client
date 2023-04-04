<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    public function scopeFilter($query,array $filters)
    {
        dd($filters['tag']);
        if ($filters['tag'] ?? false){
                $query->where('tags','like','%'.request('tag').'%');
        }        


        if ($filters['id'] ?? false){
                $query->where('id','like','%'.request('id').'%');
        }        
        // if ($filters['search'] ?? false){
        //         $query->where('title','like','%'.request('search').'%')->
        //         orWhere('description','like','%'.request('search').'%')->
        //         orWhere('categories','like','%'.request('search').'%');

        // }        
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
}
