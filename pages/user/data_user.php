<?php 
include "../../controller/koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<?php
  include "layout/layout_data/head.php";
?>
<body class="hold-transition sidebar-mini">
<div class="wrapper">


  <!-- Main Sidebar Container -->
  <?php
  include "layout/layout_data/aside.php";
  ?>
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="../../pages_assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
         <span class="brand-text font-weight-light">Admin Pengelola</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
                      <?php 
  session_start();
  if($_SESSION['status']!="login_a"){
    header("location:../../login.php?pesan=belum_login");
  }
  ?>
          <img src=" <?=$_SESSION['foto'];?>" class="img-circle elevation-2" alt="User Image" style="width: 40px; height: 40px;">
        </div>
        <div class="info">
     
          <a href="#" class="d-block">Halo, <?php echo $_SESSION['nama']; ?></a>

        </div>
      </div>

    <!-- Sidebar -->
 <?php
  include "layout/sidebar.php";
  ?>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">

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
                <h3 class="card-title">DATA ADMIN</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No.</th>
                    <th>Kode Admin</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Telepon</th>
                    <th>Email</th>
                    <th>Jenis Adm</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  
                  <tr>
                     <?php
          $sql=mysqli_query($conn, "SELECT * FROM tb_admin");
          $no=1;
          while($d= mysqli_fetch_array($sql)){
                  echo "<tr>
              <td width='40px' align='center'>$no</td>
              <td>$d[kode_admin]</td>
              <td>$d[nama]</td>
               <td>$d[alamat]</td>
              <td>$d[no_telp]</td>
               
          

           
              <td>$d[email]</td>
               <td>$d[level]</td>
            
              
            </tr>"; 
              $no++;
          }
?>
                  </tr>

                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

  
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
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0-rc
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<?php
  include "layout/layout_data/jquery.php"; 
?>
</body>
</html>
