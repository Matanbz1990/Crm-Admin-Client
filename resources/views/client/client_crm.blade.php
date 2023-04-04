
 @extends('layout')
@section('content')



<div class="flexy">
  <h2>istore crm - store managment state</h2>
  <h2>welcome <?php echo $client['name'] ?></h2>
 </div>   
    
 @include('partials._search')
  <x-flash-message >
            @endif

<div class="productsContainer">
  <?php $isCrm="crm"?>

     <?php foreach ($products as $product): ?> 
     <x-client-product-card :product="$product" isAuth={{$isCrm}}/>
     <?php endforeach ?>

   
      
</div>

 {{-- <div class="">
      {{$products->links() }}
      
     </div> --}}
<div class="center">
<div class="tagsLine">
            <a href="/{{$client['id']}}/crm">tags: </a>
            <div class="">
                   <?php foreach ( $tags as $tag){?> 
                         {{-- <p><strong> <?php echo $tag?>|</strong> </p> --}}
                         <a href="/{{$client['id']}}/crm/?tag={{$tag}}"><?php echo $tag?></a>
              <?php }?>
            </div>
   
          </div>  
</div>

    <div class="center flexy">
            <form  action="/{{$client['id']}}/crm/create" >
                <button type="submit">add product</button>
            </form>
  
           <form action="/{{$client['id']}}/crm">
                <button type="submit">show all products</button>
           </form>


    </div>
     





@endsection