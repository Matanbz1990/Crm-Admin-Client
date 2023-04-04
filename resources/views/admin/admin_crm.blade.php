 @extends('layout')
@section('content')

        <h1>Welcome Admin</h1>
        <h3>mange your clients</h3>

        <h1>all the clients data: </h1>
    <?php foreach ($clients as $client): ?> 
    <div class="data">
        <h2>name: <?php echo $client['name']?></h2>
    <h2> id: <?php echo $client['id']?></h2>
    <h2> description: <?php echo $client['description']?></h2>


    </div>
    
    <?php endforeach ?>
      



@endsection