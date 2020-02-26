@extends('layout.app')

@section('content')

    <div class="container">
        @include('incl.messages')
        <div class="row row-spread-items row-center-y">
            <div class="col-7">
                <p class="page-title text-generis">Pictures of {{$gallery->title}}</p>
            </div>
            <div class="col-3 text-right">
                <a href="http://" class="btn btn-purple-outline">Upload Photo</a>
            </div>
        </div>
        
        
    </div>
    
@endsection