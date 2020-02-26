@if (count($errors)>  0)
    <section class="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        
    </section>
    
@endif
@if (session('success'))
    <section class="alert">{{session('success')}}</section>
@endif