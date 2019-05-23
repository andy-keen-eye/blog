@extends('app')

@section('content')
<form action="save" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="id" value="{{ $post->id or '' }}">
    <div class="container">
<!-- Data of post  -->
        <div class="row">
            <div class="col-md-12">
                <h2>Input post data</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-md-2">
                <label>Title:</label>
            </div>
            <div class="col-md-10">
                <input type="text" class="form-control" name="title" value="{{ $post->title or '' }}">
            </div>
        </div>

        <div class="row">
            <div class="col-md-2">
                <label>Date:</label>
            </div>
            <div class="col-md-2">
                <input type="text" class="form-control" name="created_at"
                value="{{ $post->created_at or date("Y-m-d H:i:s") }}">
            </div>
        </div>

        <div class="col-md-12">
            <label>Short story:</label>
        </div>
        <div class="col-md-12">
            <textarea class="form-control" rows="4" name="short_story">{{ $post->short_story or '' }}</textarea>
        </div>

        <div class="col-md-12">
            <label>Full story:</label>
        </div>
        <div class="col-md-12">
            <textarea class="form-control" rows="10" name="full_story">{{ $post->full_story or '' }}</textarea>
        </div>

<!-- End data of post -->
        <button type="submit" class="btn btn-success">Save</button>
    </div>
</form>
@endsection