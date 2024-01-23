<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Histori</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Data Utama</a></li>
              <li class="breadcrumb-item active">Histori</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      <div class="card">
       <div class="card-header">
         <h5>Data Penjualan</h5>
      </div>
      <div class="card-body">
        <button class="btn bg-purple mb-2" data-toggle="modal" data-target="#modalRecycleBin">  <i class="fas fa-recycle"></i> Recycle Bin </button>
        <table id="example1" class="table table-hover">
          <thead class="bg-purple">
            <th>ID</th>
            <th>TANGGAL PENJUALAN</th>
            <th>PELANGGAN</th>
            <th>TOTAL BELANJA</th>
            <th>AKSI</th>
          </thead>
          <?php
            $sql="SELECT penjualan.*,pelanggan.NamaPelanggan FROM penjualan,pelanggan WHERE penjualan.PelangganID=pelanggan.PelangganID";
            $query=mysqli_query($koneksi,$sql);
            while($kolom=mysqli_fetch_array($query)){
              ?>
              <tr>
                <td><?= $kolom['PenjualanID']; ?></td>
                <td><?= $kolom['TanggalPenjualan']; ?></td>
                <td><?= $kolom['NamaPelanggan']; ?></td>
                <td><?= $kolom['TotalHarga']; ?></td>
                <td> 
                 <!--Tombol Print Nota-->
                 <a href="#"><i class="fas fa-print"></i></a> |

                 <!--Tombol Informasi-->
                 <a href="index.php?p=infojual&PenjualanID=<?= $kolom['PenjualanID']; ?>"><i class="fas fa-search"></i></a> |

                  <!--Tombol Hapus-->
                  <a href="aksi/penjualan.php?aksi=hapus&PenjualanID=<?=$kolom['PenjualanID']; ?>" onclick="return confirm ('Yakin Akan Hapus Data Ini???')"><i class="fas fa-trash"></i></a>
                </td>
              </tr>
               <!-- Modal Ubah Produk -->
  <div class="modal fade" id="modalUbah<?= $kolom['PenjualanID']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ubah Penjualan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="aksi/penjualan.php" method="post">
        <input type="hidden" name="aksi" value="ubah">
        <input type="hidden" name="PenjualanID" value="<?=$kolom['PenjualanID']; ?>">

        <label for="TanggalPenjualan">Tanggal Penjualan</label>
          <input type="text" name="TanggalPenjualan" value="<?=$kolom['TanggalPenjualan']; ?>" class="form-control" required>

          <label for="PelangganID">Pelanggan</label>
          <input type="text" name="PelangganID" value="<?=$kolom['PelangganID']; ?>" class="form-control" required>

          <label for="TotalHarga">Total Harga</label>
          <input type="text" name="TotalHarga" value="<?=$kolom['TotalHarga']; ?>" class="form-control" required>

          <br>
          <button type="submit" class="btn btn-block bg-purple mt-3"> <i class="fas fa-save"
          >Simpan</i></button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
              <?php
            } //Akhir While
              ?>
        </table>
        <button type="button" class="btn bg-purple btn-block mt-3" data-toggle="modal" data-target="#modalTambah"> <i class="fas fa-plus">Tambah Penjualan Baru</i></button>
      </div>
      </div>  
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
   <!-- Modal Tambah Produk -->
   <div class="modal fade" id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Penjualan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="aksi/penjualan.php" method="post">
        <input type="hidden" name="aksi" value="tambah">

        <label for="TanggalPenjualan">TanggalPenjualan</label>
          <input type="text" name="TanggalPenjualan" class="form-control" required>
    
        <label for="PelangganID">Pelanggan</label>
          <input type="text" name="PelangganID" class="form-control" required>

          <input type="hidden" name="aksi" value="tambah">

          <label for="TotalHarga">Total Belanja</label>
          <input type="text" name="TotalHarga" class="form-control" required>


          <button type="submit" class="btn btn-block bg-purple mt-3"> <i class="fas fa-save"
          >Simpan</i></button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Recycle Bin -->
