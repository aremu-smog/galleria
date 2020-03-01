@extends('layout.app')

@section('content')

    <div class="container">
        @include('incl.messages')
        <div class="row row-spread-items row-center-y">
            <div class="col-7">
                <p class="page-title text-generis">Pictures of {{$gallery->title}}</p>
            </div>
            <div class="col-5 text-right">
                <a href="/image/create/{{$gallery->id}}" class="btn btn-purple-outline">Upload Photo</a>
            </div>
        </div>
        
        <div class="images">
        @foreach ($gallery->images as $image)
            <a href="/image/{{$image->id}}">
                <img src="/storage/img/albums/{{$gallery->id}}/{{$image->image}}" alt="{{$image->title}}">
            </a>
        @endforeach
        </div>
        
    </div>
    
@endsection