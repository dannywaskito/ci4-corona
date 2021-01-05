// Sweet Alert Siswa
const flashDataAdmin = $('.admin').data('flashdata');
// Sweet Alert Berhasil
if (flashDataAdmin) {
  swal({
    title  : 'Data Admin ',
    text   : 'Berhasil ' + flashDataAdmin,
    type   : 'success'
  });
}

// Sweet Alert Hapus
$('.tombol-hpss').on('click', function(e){

  e.preventDefault();
  const href = $(this).attr('href');

Swal({
  title: 'Apakah Anda Yakin?',
  text:  "Data Admin akan di hapus?",
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