

@if (session()->has('message')){

    <div class="flash">
    
       <h1> {{session('message')}}</h1>
    
    </div>
}

@endif
