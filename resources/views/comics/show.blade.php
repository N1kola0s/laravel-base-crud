@extends ('layouts.app')

@section('page-title', 'single-Comic') 

@section('content')
<div class="container">

    <div class="comic_image d-flex justify-content-center pb-5">
        <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
    </div>

    <h1>{{$comic->title}}</h1>
    <div class="content">
        {{$comic->description}}
    </div>
</div>


@endsection