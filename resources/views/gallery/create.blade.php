@extends('layout.app')

@section('content')

    <div class="row form-container">
        <div class="col-6 create_gallery"></div>
        <div class="col-6 form-area">
            <p class="text-generis">Create Gallery</p>
            {{Form::open(['action'=>'GalleryController@store','method'=>'POST','enctype'=>'multipart/form-data'])}}
                <div class="form-group">
                    {{Form::text('title','',['placeholder'=>'Gallery title'])}}
                </div>
                <div class="form-group">
                    {{Form::file('cover')}}
                </div>
                <div class="form-group">
                    {{Form::text('by','',['placeholder'=>'Your name'])}}
                </div>
                <div class="form-group">
                    {{Form::button('Create Gallery',['type'=>'submit','class'=>'btn btn-purple'])}}
                </div>
            {{Form::close()}}
        </div>
    </div>
@endsection