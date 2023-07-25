<div>
    <div class="card">
        <div class="card-header">Form</div>
        <div class="card-body">
            <form wire:submit.prevent="update">
                <div class="mb-2">
                    <label for="" class="form-label">Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" wire:model="title">
                        @error('title') 
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                </div>
                <div class="mb-2">
                    <label for="" class="form-label">Description</label>
                    <input type="text" class="form-control @error('description') is-invalid @enderror" wire:model="description">
                        @error('description') 
                        <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                        @enderror
                </div>
                <button type="submit" class="btn btn-warning">Update</button>
            </form>
        </div>
    </div>
</div>
