// Sweet Alert Siswa
const flashDataJurusan = $('.jurusan').data('flashdata');
// Sweet Alert Berhasil
if (flashDataJurusan) {
  swal({
    title  : 'Data Jurusan ',
    text   : 'Berhasil ' + flashDataJurusan,
    type   : 'success'
  });
}

// Sweet Alert Hapus
$('.tombol-hps').on('click', function(e){

  e.preventDefault();
  const href = $(this).attr('href');

Swal({
  title: 'Apakah Anda Yakin?',
  text:  "Data Jurusan akan di hapus?",
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