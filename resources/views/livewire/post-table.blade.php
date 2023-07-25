<div>
    <table class="table table-dark table-striped">
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
        @foreach ($posts as $post)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->description }}</td>
            <td>
                <a href="/post/show/{{ $post->id }}" class="btn btn-success">Detail</a>
                <a href="/post/edit/{{ $post->id }}" class="btn btn-warning">Edit</a>
                {{-- <button wire:click="delete({{ $post->id }})" class="btn btn-danger">Delete</button> --}}
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deletePost-{{ $post->id }}">
                    Delete
                </button>
                
                <!-- Modal -->
                <div class="modal fade" id="deletePost-{{ $post->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h1 class="modal-title fs-5 text-dark" id="staticBackdropLabel">Delete This Post?</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body text-dark">
                        Title : {{ $post->title }}
                        <br>
                        Description : {{ $post->description }}
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button wire:click="delete({{ $post->id }})" class="btn btn-outline-danger">Delete</button>
                        </div>
                    </div>
                    </div>
                </div>
            </td>
        </tr>
        @endforeach
    </table>
</div>


  

 
  