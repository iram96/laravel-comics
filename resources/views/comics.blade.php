@extends('layout.main')

@section('content')
    <h1>COMICS</h1>
<ul class="comics">

    @forelse ($comics as $index => $comic)
        <li >
            <div class="card">
                {{-- <a href="{{ url("/comics/$index")}}"> --}}
                <a href="{{ route("comic", ['id' => $index])}}">
                    <img src="{{ $comic['thumb']}}" alt="/">
                </a>
                <h4 > {{ $comic['title'] }}</h4>
            </div>
        </li>
    @empty
    <h3>Non ci sono fumetti!</h3>
    @endforelse
</ul>
@endsection