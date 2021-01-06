<!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
<!--   <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Apakah Anda Yakin Ingin Keluar?</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?php echo base_url() ?>login/logout">Logout</a>
        </div>
      </div>
    </div>
  </div>
 -->
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <strong>Copyright &copy; <?php echo date("Y"); ?> <a href="<?=base_url() ?>">Pantau Covid 19</a> All rights reserved</strong>
          </div>
        </div>
      </footer>

  <!-- Bootstrap core JavaScript-->
  <script src="<?=base_url() ?>/assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?=base_url() ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?=base_url() ?>/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?=base_url() ?>/assets/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="<?=base_url() ?>/assets/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="<?=base_url() ?>/assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
<!--   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>    -->     
 <script>
    $(document).ready(function() {
            var table = $('#table').DataTable( {
            
              rowReorder: {
                  selector: 'td:nth-child(2)'
              },
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'pdf', 'print'
                ],
                ordering: false,
                targets: 0
            });
        });
  </script>


    </body>
</html>
