@extends('layouts.layout')

@section('content')
<div>
    <h1>About post {{$post->title}}</h1>
</div>
<div>
    <a href="{{url('posts/'.$post->id.'/edit')}}">Edit</a>
    <form action="{{url('/posts/'.$post->id)}}" method="post">
        @method('DELETE')
        @csrf
        <button>Delete</button>
    </form>
</div>
<div class="col-12 form-group row">



        <div class="col-6 form-control">{{$post->description}}</div>



</div>
@endsection
