$(document).ready(function(){
	$('#imageUpload').popupWindow({ 
		windowURL: siteURL + 'elfinder-standalone.html', 
		windowName:'Filebrowser',
		height:490, 
		width:950,
		centerScreen:1
	}); 
	
	
	// datable
	
	$('.DataTable').DataTable();
	
	
	
	
	
	
});

function processFile(file){
	$('#picture').html('<img class="img-responsive" alt="" src="' + file + '" />');
	$('#featured_image').val(file);
	$('#imageRemove').show();
}

			
$(document).ready(function() {
	$('#imageRemove').click(function() {
		$('#picture').html('');
		$('#featured_image').val('');
		$(this).hide();
	});
});


