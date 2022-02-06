$(function () {
	$('.tombolEditBus').on('click', function () {
		const id = $(this).data('id');

		$.ajax({
			url: base + '/admin/getubah',
			data: {
				id: id
			},
			method: 'post',
			dataType: 'json',
			success: function (data) {
				$('#name').val(data.name);
				$('#description').val(data.description);
				$('#image').attr('src', base + '/assets/img/' + data.image);
				$('#id').val(data.id);
			}
		})
	});
});

$(function () {
	$('.tombolEditStation').on('click', function () {
		const id = $(this).data('id');

		$.ajax({
			url: base + '/admin/getubah_station',
			data: {
				id: id
			},
			method: 'post',
			dataType: 'json',
			success: function (data) {
				$('#editNama').val(data.nama);
				$('#editLokasi').val(data.lokasi);
				$('#editLatitude').val(data.latitude);
				$('#editLongitude').val(data.longitude);
				$('#editStatus').val(data.status);
				$('#image').attr('src', base + '/assets/img/' + data.foto);
				$('#id').val(data.id);
			}
		})
	});
});