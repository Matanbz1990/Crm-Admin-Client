 @extends('layout')
@section('content')



     
             <h2>welcome to the shop of <?php echo $client['name'] ?></h2>

 @include('partials._search')
 {{-- <x-_search :client="$client"/> --}}


<div class="productsContainer">
    <?php $isStore='store'?>

     <?php foreach ($products as $product): ?> 
     <x-product-card :product="$product" isAuth={{$isStore}} />

    <?php endforeach ?>
        

</div>
   <div class="tagsLine center">
            <a href="/{{$client['id']}}/store">tags: </a>
            <div class="">
                   <?php foreach ( $tags as $tag){?> 
                         {{-- <p><strong> <?php echo $tag?>|</strong> </p> --}}
                         <a href="/{{$client['id']}}/store/?tag={{$tag}}"><?php echo $tag?></a>
          <?php }?>

            </div>
     
         </div>
         <div class="center flexy">
       <form action="/{{$client['id']}}/store">
                <button type="submit">show all products</button>
                </form>
          <form action="/{{$client['id']}}/store">
                <button type="submit">Cart</button>
                </form>
         </div>
      


@endsection