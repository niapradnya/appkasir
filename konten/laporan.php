<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Laporan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Laporan</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <p> Laporan Produk</p>
              </div>
              <div class="icon">
                <i class="fas fa-user"></i>
              </div>
              <a href="pdf/output/laporan_produk.php" target="_blank" class="small-box-footer">Cetak <i class="fas fa-print"></i></a> <!-- blank utk tab baru -->
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                
                <p>Laporan Pelanggan</p>
              </div>
              <div class="icon">
                <i class="fas fa-money-bill"></i>
              </div>
              <a href="pdf/output/laporan_pelanggan.php" target="_blank" class="small-box-footer">Cetak <i class="fas fa-print"></i></a>           
              </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-purple">
              <div class="inner">

                <p>Laporan Penjualan</p>
              </div>
              <div class="icon">
                <i class="fas fa-money-bill"></i>
              </div>
              <a href="pdf/output/laporan_penjualan.php" data-toggle="modal" data-target="#modalPenjualan" class="small-box-footer">Cetak <i class="fas fa-print"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">

                <p>Laporan Penjualan Per-Produk</p>
              </div>
              <div class="icon">
                <i class="fas fa-exclamation-triangle"></i>
              </div>
              <a href="pdf/output/laporan_penjualan_perproduk.php" data-toggle="modal" data-target="#modalPenjualanPer-Produk" class="small-box-footer">Cetak <i class="fas fa-print"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->

       
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <!-- Modal Laporan Penjualan -->
<div class="modal fade" id="modalPenjualan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pilih Periode Laporan Penjualan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="pdf/output/laporan_penjualan.php" method="get" target="_blank">

          <label for="tanggal_awal">Tanggal Awal Periode</label>
          <input type="date" name="tanggal_awal" class="form-control" required>

          <label for="tanggal_akhir">Tanggal Akhir Periode</label>
          <input type="date" name="tanggal_akhir" class="form-control" required>

          <button type="submit" class="btn btn-block bg-purple mt-3"> <i class="fas fa-print"
          >Cetak</i></button>
        </form>
      </div>
    </div>
  </div>
</div>

 
  <!-- Modal Laporan Penjualan Per-Produk -->
  <div class="modal fade" id="modalPenjualanPer-Produk" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pilih Produk & Periode Laporan Penjualan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="pdf/output/laporan_penjualan_perproduk.php" method="get" target="_blank">

<label for="NamaProduk">Produk</label>
<select name="ProdukID" class="form-control" required>
  <option value="">-- Pilih Produk --</option>
  <?php 
    $sql="SELECT * FROM produk ORDER BY NamaProduk";
    $query=mysqli_query($koneksi,$sql);
    while($data=mysqli_fetch_array($query)){
      echo "<option value='$data[ProdukID]'>$data[NamaProduk]</option>";
    }
  ?>
</select>

  <label for="tanggal_awal">Tanggal Awal Periode</label>
  <input type="date" name="tanggal_awal" class="form-control" required>

  <label for="tanggal_akhir">Tanggal Akhir Periode</label>
  <input type="date" name="tanggal_akhir" class="form-control" required>

  <button type="submit" class="btn btn-block bg-purple mt-3"> <i class="fas fa-print"
  >Cetak</i></button>
</form>
      </div>
    </div>
  </div>
</div>