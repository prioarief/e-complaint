$(document).ready(function () {
	$("select.order").change(function () {
		var selectedOrder = $(this).children("option:selected").val();
		console.log(selectedOrder)

	});


	$('form#form-tanggapan').hide();

	$("button#tanggapan").click(function () {
		$('form#form-tanggapan').show();
		$('button#tanggapan').hide();
	});

	$("button#batal").click(function () {
		$('form#form-tanggapan').hide();
		$('button#tanggapan').show();
	});
});
