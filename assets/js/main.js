$(document).ready(function () {

	$(".btn-destroy").click(function () {
		var id = $(this).attr('contact-id');
		if (confirm('Opravdu chcete odstranit kontakt?')) {
			$.ajax({
				url: "index.php?request=destroy",
				data: { id: id },
				success: function (result) {
					console.log($('#line-' + id));
					$('#line-' + id).remove();
				}
			});
		}
		return false;
	});


});