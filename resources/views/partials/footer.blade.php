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

$('#editStock').on('shown.bs.modal', function (event) {
    console.log('hfhfhfhfgdgdggd');
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('.modal-body input').val(recipient)
})


</script>
<div class="row">
    <div class="col-lg-12">
        <div class="footer">
            <p>Copyright © Directorate of Industrial Training 2021. - <a href="#">Business Incubation Center</a></p>
        </div>
    </div>
</div>
