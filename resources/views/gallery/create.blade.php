@extends('layout.app')

@section('content')

    <div class="row form-container row-column">
        <div class="col-7 create_gallery col-mobile-full"></div>
        <div class="col-5 form-area col-mobile-full">
            <p class="text-generis text-small">Create Gallery</p>

                @include('incl.messages')

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