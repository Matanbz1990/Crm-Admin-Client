 @extends('layout')
@section('content')

{{-- <?php dd($clients)?> --}}


<div class="center">  
             <h1 class="text-2xl font-bold">Welcome to istores</h1>
         <h3>The best online shopping stores for buisness owners</h3>
                <div class="data">

                <form action="/signup">
                        <button type="submit">signup</button>
                </form>
                <form action="/login">
                        <button type="submit">login</button>
                </form>        
                <form action="/admin_login">
                        <button type="submit">admin login</button>
                </form>

               

                </div>
                <div class="wrrapper">
                        <h3>stores list:<h3>
                 <div >
                       
                 <?php foreach ($clients as $client): ?>
                       <a href="/{{$client['id']}}/store" ><h3 class="storeNames">{{$client['store_name']}}<h3></a>
                <?php endforeach?>
             
                </div>
               
                


                </div>

                <?
               

 </div>
     
            
     
@endsection