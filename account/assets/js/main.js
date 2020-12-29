$(document).ready(function() {

     
$('#product_table').DataTable({

       "pagingType": "full_numbers"
});
 $('#product_table').removeClass( 'display' ).addClass('table table-striped table-bordered');
$('table').DataTable({
	dom: 'Bfrtip',
        buttons: [
            'csv', 'excel', 'pdf', 'print'
        ]
    }); 

});