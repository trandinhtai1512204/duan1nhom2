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
          <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Thêm Danh Mục Sản Phẩm</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?php 'http://localhost:8080/duan1-xuong/Tài%20nguyên-20241101T131935Z-001/Tài%20nguyên/mvc-oop-basic/mvc-oop-basic/admin/?act=them-danh-muc'  ?>" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label >Tên Danh Mục</label>
                    <input type="text" class="form-control" placeholder="nhập tên danh mục" name="ten_danh_muc">
                  </div>

                  <div class="form-group">
                    <label >Mô Tả</label>
                    <textarea name="mo_ta" id="" class="form-control" placeholder="Nhập Mô Tả"></textarea>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" fdprocessedid="udagbj">Submit</button>
                </div>
              </form>
            </div>
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

</body>
</html>
