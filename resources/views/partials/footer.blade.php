<script>
$(document).ready( function () {
    $('#table_id').DataTable();
} );

//search for items table
$(document).ready( function () {
    $('#items').DataTable();
} );

//search for categories
$(document).ready( function () {
    $('#categories').DataTable();
} );

//search for units
$(document).ready( function () {
    $('#units').DataTable();
} );

$(document).on('click', '#editStockbtnggg', function(){
  var id = $(this).attr('id');
  $('#editform').html('');
  $.ajax({
   url :"edit-stockItem/"+id"",
   dataType:"json",
   success:function(data)
   {
    $('#item_name').val("pppp");
    $('#item_category').val(data.result.last_name);
    $('#id').val('asdfghjk');
    $('#editStock').modal('show');
   }
  })
 });


</script>
<div class="row">
    <div class="col-lg-12">
        <div class="footer">
            <p>Copyright © Directorate of Industrial Training 2021. - <a href="#">Business Incubation Center</a></p>
        </div>
    </div>
</div>
