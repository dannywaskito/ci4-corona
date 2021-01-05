// Sweet Alert Siswa
const flashDataSiswa = $('.siswa').data('flashdata');
// Sweet Alert Berhasil
if (flashDataSiswa) {
  swal({
  	title  : 'Data Siswa ',
  	text   : 'Berhasil ' + flashDataSiswa,
  	type   : 'success'
  });
}

// Sweet Alert Hapus
$('.tombol-delete').on('click', function(e){

	e.preventDefault();
	const href = $(this).attr('href');

Swal({
  title: 'Apakah Anda Yakin?',
  text:  "Data Siswa akan di hapus?",
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
