@extends('layout.app')

@section('content')

    <div class="container">
        @include('incl.messages')
        <div class="row  image ">
            <div class="col-9">
                <img src="/storage/img/albums/{{$image->gallery_id}}/{{$image->image}}" alt="{{$image->title}}">
            </div>
            <div class="col-3 text-left details">
                <p><a href="/gallery/{{$image->gallery_id}}" class="text-purple">Back to gallery</a></p>
                <p class="page-title text-generis"> {{$image->title}}</p>
                <p>Uploaded by <b>{{$image->by}}</b> <br/>
                on <b>{{$image->created_at->format('M d, Y')}}</b></p>
                <a href="/storage/img/albums/{{$image->gallery_id}}/{{$image->image}}" download="{{time()}}" class="btn btn-purple">Download Photo</a>
            </div>
        </div>
        
        
    </div>
    
@endsection