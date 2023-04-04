 @extends('layout')
@section('content')

<h1>Admin Login</h1>
<div>
<div>
<label for="email">Email:</label>
    <input type="email" name="email">

</div>
    <div>
   <label for="password">Password:</label>
    <input type="password" name="password">
    </div>
    <div class="center">
 <div class="data">
   <button >Login</button>
    <button>forgot password</button>
 </div>
    </div>

 

 
</div>

@endsection