@extends('layouts.layout')

@section('content')
<div>
    <h1>Create new post</h1>
</div>

<div class="col-12 form-group row">

    <form action="{{url('/posts')}}" method="post">
        @csrf
        <div class="form-group col-6">
            <div>
                <h3>Title</h3>
                <input type="text" name="title">
            </div>

            <div>
                <h3>Description</h3>
                <textarea name="description" id="" cols="30" rows="10"></textarea>
            <button type="submit">Save</button>
            </div>
        </div>
    </form>

</div>
@endsection
