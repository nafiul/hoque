@extends('layouts.layout')

@section('content')
<div>
    <h1>Edit post</h1>
</div>

<div class="col-12 form-group row">

    <form action="{{url('/posts/'.$post->id)}}" method="post">
        @method('PATCH')
        @csrf
        <div class="form-group col-6">
            <div>
                <h3>Title</h3>
                <input type="text" name="title" value="{{$post->title}}">
            </div>

            <div>
                <h3>Description</h3>
                <textarea name="description" id="" cols="30" rows="10" >{{$post->description}}</textarea>
            <button type="submit">Update</button>
            </div>
        </div>
    </form>

</div>
@endsection
