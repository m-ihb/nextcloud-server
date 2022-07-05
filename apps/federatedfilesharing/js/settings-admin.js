window.addEventListener('DOMContentLoaded', function() {

	$('#fileSharingSettings input').change(function() {
		var value = 'no';
		if (this.checked) {
			value = 'yes';
		}
		OCP.AppConfig.setValue('files_sharing', $(this).attr('name'), value);
	});

});