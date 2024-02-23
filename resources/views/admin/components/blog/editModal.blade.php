<div class="modal fade" id="blogEditModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog"
    aria-labelledby="blogEditModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="blogEditModalTitle">Blog Edit </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="img" class="form-label">Photo</label>
                        <input id="blogImg" name="img" type="file"
                            class="form-control @error('img') is-invalid @enderror" id="img">
                        @error('img')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input id="blogTitle" name="title" type="text"
                            class="form-control @error('title') is-invalid @enderror" id="title"
                            placeholder="Enter Type title">
                        @error('title')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="body" class="form-label">Description</label>
                        <textarea id="blogdescription" name="body" class="form-control @error('body') is-invalid @enderror" rows="10"
                            id="body" placeholder="Enter description"></textarea>
                        @error('body')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary"> <i class="bx bx-sync"></i> Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
