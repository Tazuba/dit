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

$(document).on('click', '#editStockbtn', function(){
$('#table_id .customerIDCell').each(function() {
  var id = $(this).html();
  document.getElementById('id').value = id;
});
   });

$(document).on('click', '#editStockbtn', function(){
$('#table_id .customerIDCell').each(function() {
  var id = $(this).html();
  document.getElementById('deleteValue').value = id;
});
   });

</script>
<div class="row">
    <div class="col-lg-12">
        <div class="footer">
            <p>Copyright © Directorate of Industrial Training 2021. - <a href="#">Business Incubation Center</a></p>
        </div>
    </div>
</div>
