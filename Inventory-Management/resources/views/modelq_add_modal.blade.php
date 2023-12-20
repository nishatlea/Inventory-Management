<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="addModelqModal" tabindex="-1" aria-labelledby="addModelqModalLabel" aria-hidden="true">

<form action="model/add-brand" method="post" id="addModelqForm">

<h4>Fields marked with * are necessary</h4>
<div class="errMsgContainer mb-3"> </div>
<div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addModelqModalLabel">Add Model*</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>



      <div class="modal-body">
        <div class="form-group" >
            <label for="brand_name"> Model Name</label>
            <input type="text" class="form-control" name="model_name" id="model_name" placeholder="Model Name">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary add_model ">Save changes</button>
      </div>
    </div>
  </div>

</form>
</div>
