<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">

<form action="/update-brand" method="post" id="updateBrandForm">
@csrf 
<input type = "hidden" id = "up_id"> 
<h4>Fields marked with * are necessary</h4>
<div class="errMsgContainer mb-3"> </div>
<div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addModalLabel">Add Brand*</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>



      <div class="modal-body">
        <div class="form-group" >
            <label for="brand_name"> Brand Name</label>
            <input type="text" class="form-control" name="brand_name" id="brand_name" placeholder="Brand Name">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary add_brand ">Save changes</button>
      </div>
    </div>
  </div>

</form>
</div>
