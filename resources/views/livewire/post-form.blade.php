<div>

    <div class="card">
        <div class="card-header">Form</div>
        <div class="card-body">
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ session('success') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @elseif(session()->has('failed'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>{{ session('failed') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <form wire:submit.prevent="store">
                <div class="mb-2">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" wire:model="title" required>
                        @error('title') 
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                </div>
                <div class="mb-2">
                    <label for="description" class="form-label">Description</label>
                    <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" wire:model="description" required>
                        @error('description') 
                        <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                        @enderror
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>
</div>
