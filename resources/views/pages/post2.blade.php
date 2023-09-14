@extends("layouts.{$layout}")
<h2>Post 2</h2>

@section('content')

<div class="container container-240">
    <div class="row">
        @foreach($posts as $post)
        <div class="col-12 post_item">
            <h2>{{ $post -> title}}</h2> 
            <p>{{ $post-> text }}</p>
            <div class="author_wrap">
                <span class="author">{{ $post-> author-> name}}</span>
                <span class="gender">{{ $post-> author-> gender-> gender}}</span> 
            </div>
        </div>
            
        @endforeach
    </div>   
</div>

@endsection