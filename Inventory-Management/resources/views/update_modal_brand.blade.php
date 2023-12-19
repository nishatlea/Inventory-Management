<!-- Update Modal -->

<div class="modal fade updateModal" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
    <!-- Modal content -->
    
    <form action="{{ route('update.brand', ['id' => $brand->id]) }}" method="POST" id="updateBrandForm">
    @csrf <!-- CSRF token -->
    @method('PUT') <!-- Method spoofing -->
    <!-- Other form fields -->
        <input type="hidden" id="up_id">
        <!-- <h4>Fields marked with * are necessary</h4> -->
        <div class="errMsgContainer mb-3"></div>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="updateModalLabel">Update Brand</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="up_name"> Brand Name</label>
                        <input type="text" class="form-control up_name" name="up_name" id="up_name" placeholder="Update Brand Name">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary update_brand">Update changes</button>
                </div>
            </div>
        </div>
    </form>
</div>
