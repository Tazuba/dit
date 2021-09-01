<!-- Modal Add Category -->
<div class="modal fade none-border" id="deletStock">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">
            <strong>Delete Stock</strong>
          </h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">
          <form method="post" action="{{url('delete-stock')}}">
                    {{ csrf_field() }}  <div class="row">             
              <div class="col-md-12">
              <input type = "hidden" id = "deleteValue" name ="deletid">
              <h5>
                <i class="icon ti-trash"></i>
                <label class="form-control-label">Are you sure you want to Delete this Item?</label>
              </h5>
               
              </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-danger waves-effect waves-light save-category">Delet Item</button>
        </div>
             </form>
      </div>
    </div>
  </div>
  <!-- END MODAL -->