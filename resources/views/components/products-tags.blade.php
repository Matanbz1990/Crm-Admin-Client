@props(['tagCsv','clientId','isAuth'])
@php
$tags=explode(',',$tagCsv)
 @endphp   
<ul>
    <?php foreach ($tags as $tag):?>
    <li><a href="/{{$clientId}}/{{$isAuth}}/?tag={{$tag}}">{{$tag}}</a></li>
    <?php endforeach?>
  
</ul>