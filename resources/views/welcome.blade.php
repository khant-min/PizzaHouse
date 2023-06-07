@extends('layouts.app')
@section('content')

<div class='title m-b-md'>
    <img src="/img/pain.jpg" alt="pain">
    <p>best pizzas</p>
</div>
<p class='msg'>{{ session('msg') }}</p>
<a href="/pizzas/create">Order a Pizza</a>
@endsection