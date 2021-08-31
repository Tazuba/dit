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
                            <option selected="true" disabled="disabled">Choose from here</option>
                            @php
                            $items = DB::select("select * from items");
                            @endphp
                            @forelse ($items as $item)
                            <option class="form-control-label">{{ $item->Item_name  ?? '-' }}</option>
                            @empty
                            <option class="form-control-label">@lang('crud.common.no_items_found')</option>

                            @endif
                        </select>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Item Category</label>
                        <select class="form-control-label col-sm-8" name="item_name" id="exampleFormControlSelect1">
                            <option selected="true" disabled="disabled">Choose from here</option>
                            @php
                            $items = DB::select("SELECT * from category3");
                            @endphp
                            @forelse ($items as $item)
                            <option class="form-control-label">{{ $item->category_name  ?? '-' }}</option>
                            @empty
                            <option class="form-control-label">@lang('crud.common.no_items_found')</option>

                            @endif
                        </select>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Measure Units</label>
                        <select class="form-control-label col-sm-8" name="item_name" id="exampleFormControlSelect1">
                            <option selected="true" disabled="disabled">Choose from here</option>
                            @php
                            $items = DB::select("SELECT * from unit3");
                            @endphp
                            @forelse ($items as $item)
                            <option class="form-control-label">{{ $item->unit_name  ?? '-' }}</option>
                            @empty
                            <option class="form-control-label">@lang('crud.common.no_items_found')</option>

                            @endif
                        </select>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Quantity In</label>
                        <input type="number" onkeyup="totalinstock()" name="total_recieved" id="quantityin" class="form-control-label col-sm-8" placeholder="Enter new stock">
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Damages Recorded</label>
                        <input type="number" onkeyup="totalinstock()" name="dameges" id="damages" class="form-control-label col-sm-8" placeholder="Enter damages">
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Actual Stock</label>
                        <input type="text" readonly name="acutual_amount" id="instock" class="form-control-label col-sm-8" placeholder="Exact Stock">
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
                        <input type="date" id="date" name="date" class="form-control-label col-sm-8">
                    </div>
                    <div class="form-group row" hidden>
                        <label class="col-sm-3 col-form-label">Recieved by</label>
                        <input type="text" name="receved_by" value="{{ Auth::user()->name }}" class="form-control-label col-sm-8" value="">
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
<script>
    function totalinstock() {
        var totalrecieved = document.getElementById('quantityin').value;
        var damages = document.getElementById('damages').value;
        document.getElementById('instock').value = (totalrecieved - damages);

        let date = new Date();
        document.getElementById('date').value = date;
        console.log(date);

    }

</script>
