@extends('layouts.app')


@section('content')
   <div>
<h1>
    pizza list
</h1>

@foreach($pizzas as $pizza)
<div>


 {{$pizza->name}} {{$pizza->type}} {{$pizza->base}}
</div>
@endforeach 

</div>

@endsection


