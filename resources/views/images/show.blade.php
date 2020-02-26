@extends('layout.app')

@section('content')

    <div class="container">
        @include('incl.messages')
        <div class="row row-spread-items ">
            <div class="col-8">
                <img src="/storage/img/albums/{{$image->gallery_id}}/{{$image->image}}" alt="{{$image->title}}">
            </div>
            <div class="col-4 text-left">
                <p class="page-title text-generis"> {{$image->title}}</p>
                <p>Uploaded by {{$image->by}} <br/>
                on {{$image->created_at}}</p>
                <a href="/storage/img/albums/{{$image->gallery_id}}/{{$image->image}}" download="{{time()}}" class="btn btn-purple">Download</a>
            </div>
        </div>
        
        
    </div>
    
@endsection