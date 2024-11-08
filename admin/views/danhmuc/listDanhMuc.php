<!-- header -->
 <?php include './views/layout/header.php'; ?>
  <!-- Navbar -->
  <?php include './views/layout/navbar.php'; ?>  
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include './views/layout/sidebar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Quản Lí Danh Mục</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <div class="card">
              <div class="card-header">
                <a href="<?= 'http://localhost:8080/duan1-xuong/Tài%20nguyên-20241101T131935Z-001/Tài%20nguyên/mvc-oop-basic/mvc-oop-basic/admin/?act=form-them-danh-muc' ?>">
                  <button class="btn btn-success">Thêm Danh Mục</button>
                </a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Stt</th>
                    <th>Tên Danh Mục</th>
                    <th>Mô Tả</th>
                    <th>Thao Tác</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php foreach($listDanhMuc as $key=>$danhMuc): ?>
                  <tr>
                    <td><?= $key+1 ?></td>
                    <td><?= $danhMuc['ten_danh_muc'] ?></td>
                    <td><?= $danhMuc['mo_ta'] ?></td>
                    <td>
                      <button class="btn btn-warning">Sua</button>
                      <button class="btn btn-danger">Xoa</button>
                    </td>

                  </tr>
                  <?php endforeach ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Stt</th>
                    <th>Tên Danh Mục</th>
                    <th>Mô Tả</th>
                    <th>Thao Tác</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- footer -->
  <?php include './views/layout/footer.php'; ?>
   <!-- end footer -->
  
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
