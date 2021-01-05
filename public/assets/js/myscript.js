// Sweet Alert Guru
const flashData = $('.flash-data').data('flashdata');
// Sweet Alert Berhasil
if (flashData) {
  swal({
  	title  : 'Data Guru ',
  	text   : 'Berhasil ' + flashData,
  	type   : 'success'
  });
}

// Sweet Alert Hapus
$('.tombol-hapus').on('click', function(e){

	e.preventDefault();
	const href = $(this).attr('href');

Swal({
  title: 'Apakah Anda Yakin?',
  text: "data guru akan di hapus?",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Hapus Data'
}).then((result) => {
  if (result.value == true) {
  	document.location.href = href;
  }
})
});