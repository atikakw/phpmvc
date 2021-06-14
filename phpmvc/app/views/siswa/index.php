<div class="container mt-3">

<div class="row">
    <div class="col-lg-6">
       <?php Flasher::flash();?>
    </div>
</div>

<div class="row mb-3">
  <div class="col-lg-6">
    <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
     Tambah Data Siswa
    </button>
  </div>
</div>

<div class="row mb-3">
  <div class="col-lg-6">
    <form action="<?= BASEURL; ?>/siswa/cari" method="post">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="cari siswa.." name="keyword" id="keyword" autocomplete="off">
          <button class="btn btn-primary" type="submit" id="tombolcari2">Cari</button>
      </div>
    </form>
  </div>
</div>

    <div class="row">
        <div class="col-lg-6">
            <h3>Daftar Siswa</h3>
            <ul class="list-group">
              <?php foreach( $data['sw'] as $sw ) : ?>
                <li class="list-group-item">
                    <?= $sw['nama']; ?>
                    <a href="<?= BASEURL; ?>/siswa/detail/<?= $sw['id']; ?>" class="badge bg-primary ml-1 .float-right">detail</a>
                    <a href="<?= BASEURL; ?>/siswa/ubah/<?= $sw['id']; ?>" class="badge bg-success ml-1 .float-right tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $sw['id']; ?>" >ubah</a>
                    <a href="<?= BASEURL; ?>/siswa/hapus/<?= $sw['id']; ?>" class="badge bg-danger ml-1 .float-right"onclick="return confirm('yakin?');">hapus</a>
                    
                </li>
              <?php endforeach; ?>
            </ul>
              
        </div>
    </div>



  <!-- Modal -->
  <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModal" aria-hidden="true">
  <div class="modal-dialog" aria-document="true">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Data Siswa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
       <form action="<?= BASEURL; ?>/siswa/tambah" method="post">
       <input type="hidden">
            <div class="form-group" name="id" id="id" >
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>

            <div class="form-group">
                <label for="nisn">NISN</label>
                <input type="number" class="form-control" id="nisn" name="nisn">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>

            <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <select class="form-control" id="jurusan" name="jurusan">
                   <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                   <option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan</option>
                   <option value="Multimedia">Multimedia</option>
                   <option value="Teknik Kendaraan Ringan Otomotif">Teknik Kendaraan Ringan Otomotif</option>
                   <option value="Teknik dan Bisnis Sepeda Motor">Teknik dan Bisnis Sepeda Motor</option>
                   <option value="Agribisnis Tanaman Pangan dan Holtikultura">Agribisnis Tanaman Pangan dan Holtikultura</option>
                   <option value="Pemulihan dan Pembenihan Tanaman">Pemulihan dan Pembenihan Tanaman</option>
                </select>
           </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
   </div>
 </div>

</div>