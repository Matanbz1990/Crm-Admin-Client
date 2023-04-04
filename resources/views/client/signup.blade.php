 @extends('layout')
@section('content')

<div >

    <div class="container center">
        <h1>Signup</h1>

        <div class="labelInput " >
            <label for="name">Name:</label>
            <input type="text" name="name">
        </div>
        <div class="labelInput ">
            <label for="email">Email:</label>
            <input type="email" name="email">
        </div>
        <div class="labelInput ">
                <label for="password">Password:</label>
                <input type="password" name="password">
        </div>
        <div class="labelInput ">
                <label for="password2">Validate Password:</label>
                <input type="password" name="password2">
        </div>
        
    
   

        <button>Signup</button>

    </div>
<p>already signup?</p>
                <form action="/login">
                <button type="submit">login</button>
                </form>
 
</div>

@endsection