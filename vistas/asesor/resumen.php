<?php
require '../layouts/headerAsesor.php';
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  
<div class="card">
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead style="background-color: green; color:white">
                <tr>
                <th>Empresa</th>
                  <th>Telefono</th>
                  <th>Propietario</th>
                  <th>Sector</th>
                  <th>Sessiones realizadas</th>
                  <th>Grado de avance</th>
                  <th>Detalle</th>
                </tr>
                </tbody>
                <tfoot>
                <tr  style="background-color: green; color:white">
                <th>Empresa</th>
                  <th>Telefono</th>
                  <th>Propietario</th>
                  <th>Sector</th>
                  <th>Sessiones realizadas</th>
                  <th>Grado de avance</th>
                  <th>Detalle</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->



</div>
<!-- /.SECCION DE TARJETAS -->
</div>
<!-- ./card-body -->
</div>
<!-- /.card -->

</div>

</div>
<!-- /.row -->




</div>
<!-- container-fluid -->


</section>
<!-- section content -->

</div>
<!-- content-wrapper -->

</div>

<?php
    require '../layouts/scripts.php';
    ?>
<!-- ./wrapper -->
<!-- jQuery -->
<script src="../../assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="../../assets/plugins/datatables/jquery.dataTables.js"></script>
<script src="../../assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- AdminLTE App -->
<script src="../../assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../assets/dist/js/demo.js"></script>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>

    </body>

    </html>