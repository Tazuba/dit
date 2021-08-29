<!-- Modal -->
<div class="modal fade" id="addStock" tabindex="-1" role="dialog" aria-labelledby="addProductModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addProductLabel">Add Stock Item</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{url('store-stock')}}">
                    {{ csrf_field() }}
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Item Name</label>
                        <select class="form-control-label col-sm-8" name="item_name" id="exampleFormControlSelect1">
                            <optgroup label="Soda">
                            <option selected="true" disabled="disabled">Choose
                                                            accounttype</option>
                           
                                <option class="form-control-label">Fanta</option>
                                <option class="form-control-label">Soda</option>
                            </optgroup>
                            <optgroup label="Foods">
                            <option selected="true" disabled="disabled">Choose
                                                            accounttype</option>
                           
                                <option class="form-control-label">Rice</option>
                                <option class="form-control-label">Posho</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Item Category</label>
                        <select class="form-control-label col-sm-8" name="item_category" id="exampleFormControlSelect1">
                            <option selected="true" disabled="disabled">Choose from here</option>
                            <option>Food Stuffs</option>
                            <option>Equipement</option>
                        </select>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Measure Units</label>
                        <select class="form-control-label col-sm-8" name="item_units" id="exampleFormControlSelect1">
                            <option selected="true" disabled="disabled">Choose from here</option>
                            <option class="form-control-label">Kilograms</option>
                            <option class="form-control-label">Clusters</option>
                        </select>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Quantity In</label>
                        <input type="number" name="total_recieved" class="form-control-label col-sm-8" placeholder="Enter new stock">
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Damages Recorded</label>
                        <input type="number" name="dameges" class="form-control-label col-sm-8" placeholder="Enter damages">
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Actual Stock</label>
                        <input type="text" name="acutual_amount" class="form-control-label col-sm-8" placeholder="Exact Stock">
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Store Section</label>
                        <select class="form-control-label col-sm-8" name="store_section" id="exampleFormControlSelect1">
                            <option selected="true" disabled="disabled">Choose from here</option>
                            <option class="form-control-label">Dry Store</option>
                            <option class="form-control-label">Cold Store</option>
                        </select>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Remarks</label>
                        <input type="text" name="remarks" class="form-control-label col-sm-8" placeholder="Reason for demage">
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Date</label>
                        <input type="date" name="date" class="form-control-label col-sm-8">
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Recieved by</label>
                        <input type="text" name="receved_by" class="form-control-label col-sm-8" value="">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-sm btn-success"> <i class="ti-save-alt"></i> Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
