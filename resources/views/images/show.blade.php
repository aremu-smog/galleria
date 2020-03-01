@extends('layout.app')

@section('content')

    <div class="container">
        @include('incl.messages')
        <div class="row  image  row-column">
            <div class="col-9 col-mobile-full">
                <img src="/storage/img/albums/{{$image->gallery_id}}/{{$image->image}}" alt="{{$image->title}}">
            </div>
            <div class="col-3 col-mobile-full text-left details">
                <p><a href="/gallery/{{$image->gallery_id}}" class="text-purple back">Back to gallery</a></p>
                <p class="page-title text-generis text-small"> {{$image->title}}</p>
                <p>Uploaded by <b>{{$image->by}}</b> <br/>
                on <b>{{$image->created_at->format('M d, Y')}}</b></p>
                <a href="/storage/img/albums/{{$image->gallery_id}}/{{$image->image}}" download="{{time()}}" class="btn btn-purple">Download Photo</a>
            </div>
        </div>
        
        
    </div>
    
@endsection