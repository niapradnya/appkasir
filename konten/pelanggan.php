<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Pelanggan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Data Utama</a></li>
              <li class="breadcrumb-item active">Pelanggan</li>
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
         <h5>Data Pelanggan</h5>
      </div>
      <div class="card-body">
        <button class="btn bg-purple mb-2" data-toggle="modal" data-target="#modalRecycleBin">  <i class="fas fa-recycle"></i> Recycle Bin </button>
        <table id="example1" class="table table-hover">
          <thead class="bg-purple">
            <th>ID</th>
            <th>NAMA PELANGGAN</th>
            <th>ALAMAT</th>
            <th>NOMOR TELEPON</th>
            <th>AKSI</th>
          </thead>
          <?php
            $sql="SELECT * FROM pelanggan";
            $query=mysqli_query($koneksi,$sql);
            while($kolom=mysqli_fetch_array($query)){
              ?>
              <tr>
                <td><?= $kolom['PelangganID']; ?></td>
                <td><?= $kolom['NamaPelanggan']; ?></td>
                <td><?= $kolom['Alamat']; ?></td>
                <td><?= $kolom['NomorTelepon']; ?></td>
                <td> 
                  <!-- Tombol Edit -->
                  <a href="#" data-toggle="modal" data-target="#modalUbah<?= $kolom['PelangganID']; ?>"><i class="fas fa-edit"></i> </a> 
                 &nbsp;
                <!-- Tombol Hapus -->
                 <a onclick="return confirm('Yakin akan menghapus data ini?')" 
                 href="aksi/pelanggan.php?aksi=hapus&PelangganID=<?= $kolom['PelangganID']; ?>"> <i class="fas fa-trash"></i> </a> 
                </td>
              </tr>
               <!-- Modal Ubah Produk -->
  <div class="modal fade" id="modalUbah<?= $kolom['PelangganID']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ubah Pelanggan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="aksi/pelanggan.php" method="post">
        <input type="hidden" name="aksi" value="ubah">
        <input type="hidden" name="PelangganID" value="<?=$kolom['PelangganID']; ?>">

          <label for="NamaPelanggan">Nama Pelanggan</label>
          <input type="text" name="NamaPelanggan" value="<?=$kolom['NamaPelanggan']; ?>" class="form-control" required>

          <label for="Alamat">Alamat</label>
          <input type="text" name="Alamat" value="<?=$kolom['Alamat']; ?>" class="form-control" required>

          <label for="NomorTelepon">Nomor Telepon</label>
          <input type="text" name="NomorTelepon" value="<?=$kolom['NomorTelepon']; ?>" class="form-control" required>

          <br>
          <button type="submit" class="btn btn-block bg-purple mt-3"> <i class="fas fa-save"
          >Simpan</i></button>
        </form>
      </div>
    </div>
  </div>
</div>
              <?php
            } //Akhir While
              ?>
        </table>
        <button type="button" class="btn bg-purple btn-block mt-3" data-toggle="modal" data-target="#modalTambah"> <i class="fas fa-plus">Tambah Pelanggan Baru</i></button>
      </div>
      </div>  
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
   <!-- Modal Tambah User -->
   <div class="modal fade" id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Pelanggan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="aksi/pelanggan.php" method="post">
        <input type="hidden" name="aksi" value="tambah">
    
        <label for="NamaPelanggan">Nama Pelanggan</label>
          <input type="text" name="NamaPelanggan" class="form-control" required>

          <input type="hidden" name="aksi" value="tambah">

          <label for="Alamat">Alamat</label>
          <input type="text" name="Alamat" class="form-control" required>

          <label for="NomorTelepon">Nomor Telepon</label>
          <input type="text" name="NomorTelepon" class="form-control" required>


          <button type="submit" class="btn btn-block bg-purple mt-3"> <i class="fas fa-save"
          >Simpan</i></button>
        </form>
      </div>
    </div>
  </div>
</div>

