@extends('layout.app')

@section('content')
<div class="container">
    @include('incl.messages')
    <p class="title text-generis page-title">All galleries</p>
    <div class="galleries">
        @foreach ($galleries as $gallery)
        <a href="/gallery/{{$gallery->id}}">
            <div class="gallery ">
                
                <img src="/storage/img/albums/{{$gallery->cover}}" alt="{{$gallery->title}}">
                <p class="text-generis text-center text-white">{{strtolower($gallery->title)}}</p>
            </div>
        </a>
        @endforeach
    </div>
    
</div>
@endsection