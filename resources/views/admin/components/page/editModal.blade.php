<div class="modal fade" id="pageEditModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog"
    aria-labelledby="pageEditModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="pageEditModalTitle">Page Edit </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST">
                <div class="modal-body">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="title" class="form-label">Page Title</label>
                        <input id="pagetitle" name="title" type="text"
                            class="form-control @error('pagetitle') is-invalid @enderror" id="pagetitle"
                            placeholder="Enter Type pagetitle">
                        @error('pagetitle')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="thumbnail" class="form-label">pageThumbnail</label>
                        <input type="file" id="thumbnail" name="thumbnail"
                            class="form-control @error('thumbnail') is-invalid @enderror" id="pageThumbnail"></input>
                        @error('thumbnail')
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
