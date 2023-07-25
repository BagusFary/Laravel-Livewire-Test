@extends('layouts.template')

@push('styles')
    @livewireStyles
@endpush

@push('scripts')
    @livewireScripts
@endpush

@section('content')
    <div class="mt-5">
        <div class="mb-2">
            <h1>Edit Data</h1>
          @livewire('post-edit', ['post' => $post])
        </div>
        <div class="mb-2">
            <a href="/posts" class="btn btn-primary">Back</a>
        </div>
    </div>
@endsection