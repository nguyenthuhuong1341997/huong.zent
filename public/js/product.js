$(function () {
	// body...
	$('.btn-success').click(function(){
		// alert("Hello! I am an alert box!");
		$('#show').modal('show');
		var id= $(this).data('id');
		$.ajax({
			type: 'get',
			url: app_url+'products/'+id,
			success: function(response){
				$('#name').text(response.name);
				$('#price').text(response.price);
			}
		})
	})
});