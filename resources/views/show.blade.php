@extends('layouts.template')


@section('content')
    <div class="mt-5">
        <div class="mb-2">
            <label for="title">Title</label>
            <input type="text" class="form-control" disabled  value="{{ $post->title }}">
        </div>
        <div class="mb-2">
            <label for="description">Description</label>
            <input type="text" class="form-control" disabled  value="{{ $post->description }}">
        </div>
        <div class="mb-2">
            <a href="/posts" class="btn btn-primary">Back</a>
        </div>
    </div>
@endsection