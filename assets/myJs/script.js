$(document).ready(function () {
	$("select.order").change(function () {
		var selectedOrder = $(this).children("option:selected").val();
		console.log(selectedOrder)

	});


	// tanggapan
	$('form#form-tanggapan').hide();

	$("button#tanggapan").click(function () {
		$('form#form-tanggapan').show();
		$('button#tanggapan').hide();
	});

	$("button#batal").click(function () {
		$('form#form-tanggapan').hide();
		$('button#tanggapan').show();
	});


	// page

	var abc = $("p#lengkap").data('laporan');
	console.log(abc)
	// $("button#singkatnya").hide();

	// $("button#selengkapnya").click(function () {
	// 	// let btn = $(this).data('id');

	// 	// console.log(btn)

	// 	$("p#singkat").hide();
	// 	$("button#singkatnya").show();
	// 	$("p#lengkap").show();
	// 	$(this).parent("button#selengkapnya").hide();

	// });

	// $("button#singkatnya").click(function () {
	// 	$("p#singkat").show();
	// 	$("button#singkatnya").hide();
	// 	$("p#lengkap").hide();
	// 	$("button#selengkapnya").show();
	// });
});
