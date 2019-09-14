@extends('layouts.layout')

@section('content')
<div>
    <h1>All Posts</h1>
</div>
<div>
    <a href="{{url('posts/create')}}">New Post</a>
</div>

<div class="col-12 form-group row">

    @foreach($posts as $post)
        <div class="col-6 form-control"><a href="{{url('posts/'.$post->id)}}">{{$post->title}}</a></div>
        <div class="col-6 form-control">{{$post->description}}</div>

    @endforeach

</div>

@endsection
