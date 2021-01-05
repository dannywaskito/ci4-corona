// Sweet Alert Mapel
const flashDataMapel = $('.mapel').data('flashdata');
// Sweet Alert Berhasil
if (flashDataMapel) {
  swal({
  	title  : 'Data Mata Pelajaran ',
  	text   : 'Berhasil ' + flashDataMapel,
  	type   : 'success'
  });
}

// Sweet Alert Hapus
$('.tombol-del').on('click', function(e){

	e.preventDefault();
	const href = $(this).attr('href');

Swal({
  title: 'Apakah Anda Yakin?',
  text:  "Data Mata Pelajaran akan di hapus?",
  icon:  'warning',
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