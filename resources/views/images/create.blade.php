@extends('layout.app')

@section('content')

    <div class="row form-container row-column">
        <div class="col-7 upload_photo col-mobile-full">
           <img src="/storage/img/albums/{{$gallery->cover}}" alt="{{$gallery->title}}">
        </div>
        <div class="col-5 form-area col-mobile-full">
            {{-- <p>{{ $gallery->title }}</p> --}}
            <p class="text-generis text-small">Upload Photo</p>

                @include('incl.messages')
                
            {{Form::open(['action'=>'ImagesController@store','method'=>'POST','enctype'=>'multipart/form-data'])}}
                <div class="form-group">
                    {{Form::hidden('gallery_id',$gallery->id)}}
                    {{Form::text('title','',['placeholder'=>'Photo title'])}}
                </div>
                <div class="form-group">
                    {{Form::file('image')}}
                </div>
                <div class="form-group">
                    {{Form::text('description','',['placeholder'=>'Photo Description'])}}
                </div>
                <div class="form-group">
                    {{Form::text('by','',['placeholder'=>'Your name'])}}
                </div>
                <div class="form-group">
                    {{Form::button('Upload Photo',['type'=>'submit','class'=>'btn btn-purple'])}}
                </div>
            {{Form::close()}}
        </div>
    </div>
@endsection