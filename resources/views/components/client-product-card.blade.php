@props(['product','isAuth'])

{{-- <?php dd($product->id)?>  --}}
 <div class="product">
                 <img alt="img of product"></img>
                 <div class="labelInput">
                     <label>title <label>
                    <input type="text" placeholder="{{$product['title']}}"/>
                    <a href="{{ url('/'.$product->client_id.'/crm/edit')}}"> <button>change</button></a>
                   
                </div>
                <div class="labelInput">
                    <label>description <label>
                        <input type="text" placeholder="{{$product['description']}}"/>
                        <button>change</button>
                 </div>
                 
                 {{--               
                    <label for="qty">units:</label>
                    
                    <input type="number" id="qty" name="qty" value=1
                    min="0" max="100"> --}}
                    <div class="flexy">
                    <x-products-tags :tagCsv="$product->tags" :clientId='$product->client_id' isAuth={{$isAuth}} />
                    <form method="POST" action="{{ url('/'.$product->client_id.'/crm/delete', ['id' => $product->id]) }}">

                           
                            @csrf
                            @method('DELETE')
                        <button type="submit">delete</button>

                        </form>
                       


                </div>

        </div>