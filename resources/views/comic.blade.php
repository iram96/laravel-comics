@extends('layout.main')

@section('content')
<div class="jc-center">
    <h2>{{ $comic['title'] }}</h2>
    <img src="{{ $comic['thumb']}}" alt="">
    <p>{{ $comic['description']}}</p>
</div>

@endsection