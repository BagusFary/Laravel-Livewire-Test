@extends('layouts.template')

@push('styles')
    @livewireStyles
@endpush

@push('scripts')
    @livewireScripts
@endpush


@section('content')
    <div>
        <div class="mt-4 mb-2">
            <h1>Posts with Livewire</h1>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if(Session::has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <i class="fa-regular fa-circle-check fa-xl"></i><strong> {{ Session::get('success') }}</strong>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <div>
                <div class="mb-3">
                    @livewire('post-form')
                </div>
                <div class="mb-3">
                    @livewire('post-table')    
                </div>
            </div>
        </div>
    </div>    
@endsection