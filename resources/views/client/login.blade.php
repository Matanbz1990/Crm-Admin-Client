 @extends('layout')
@section('content')

<div class="container center">
    
    <h1>Login</h1>
    <div >
        <label for="email">Email:</label>
        <input type="email" name="email">
    </div>
    <div >
        <label for="password">Password:</label>
        <input type="password" name="password">
    </div>
    
    
    <div class="center">
 <div class="data">
   <button>Login</button>
    <button>forgot password</button>
    <button>signup</button>
 </div>
    </div>
</div>

@endsection