 @extends('layout')
@section('content')

{{-- <?php dd($clientId)?> --}}

<div class=" center addProduct">



    <form method="POST" action="/{{$clientId}}/crm"> 
        @csrf
    {{-- <form method="POST" action="/{{$client['id']}}/crm"> --}}
     
        <h3>Add product</h3>
        <div class="labelInput">
        <label for="title">title  </label>
        <input  name="title" type="text">

            </div>

            @error('title')
               {{-- <p class="text-red-500 text-xs mg-1">{{@message}}</p> --}}
            @enderror
        <div class="labelInput">
        <label for="description">description
           
        </label>   
         <input name="description" type="text">
           @error('description')
               {{-- <p class="text-red-500 text-xs mg-1">{{@message}}</p> --}}
            @enderror
        </div>
        <div class="labelInput">
        <label for="price">price ($)
           
            </label>
             <input  name="price" type="number">

               @error('price')
               {{-- <p class="text-red-500 text-xs mg-1">{{@message}}</p> --}}
            @enderror
         </div>
           <div class="labelInput">
        <label for="tags">tags (Comma seperated)
           
            </label>
             <input  name="tags" type="text">
                @error('tags')
               {{-- <p class="text-red-500 text-xs mg-1">{{@message}}</p> --}}
            @enderror
        </div>
            <div class="">
                <button type="submit">add product</button>

            </div>

    </form>


</div>



@endsection