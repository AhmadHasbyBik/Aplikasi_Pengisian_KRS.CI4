<?= $this->extend('layouts/admin_layout') ?>
<?= $this->section('content') ?>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Mahasiswa</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Admin</li>
          <li class="breadcrumb-item active">Mahasiswa</li>
          <li class="breadcrumb-item active">Tambah</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row justify-content-center">
        <div class="col-lg-6">

        	<div class="card">
        		<div class="card-body">
              <h5 class="card-title">Data Mahasiswa <span>| Tambah Data</span></h5>  

                <form action="<?= base_url('/admin/mahasiswa/tambah/proses')?>" method="post">
                  <div class="form-group py-2">
                    <label class="mb-1">NPM</label>
                    <input type="text" name="npm_mhs" class="form-control" placeholder="NPM Mahasiswa">
                  </div>
                  <div class="form-group py-2">
                    <label class="mb-1">Nama</label>
                    <input type="text" name="nama_mhs" class="form-control" placeholder="Nama Mahasiswa">
                  </div>
                  <div class="form-group py-2">
                    <label class="mb-1">Tanggal Lahir</label>
                    <input type="date" name="tgl_lahir_mhs" class="form-control">
                  </div>
                 <div class="form-group py-2">
                    <label class="mb-1">Semester</label>
                    <select name="pilihsemester" class="form-control">
                      <option disabled selected>Pilih Semester</option>
                      <?php foreach ($dataSemester as $semester) : ?>
                      <option value="<?= $semester['kode_semester']?>"><?= $semester['nama_semester']?></option>
                      <?php endforeach ?>
                    </select>
                  </div>
                  <div class="form-group py-2">
                    <label class="mb-1">Jurusan</label>
                    <select name="pilihjurusan" class="form-control">
                      <option disabled selected>Pilih Jurusan</option>
                      <?php foreach ($dataJurusan as $jurusan) : ?>
                      <option value="<?= $jurusan['kode_jurusan']?>"><?= $jurusan['nama_jurusan']?></option>
                      <?php endforeach ?>
                    </select>
                  </div>
                   <div class="form-group py-2">
                    <label class="mb-1">Password</label>
                    <input type="password" name="password_mhs" class="form-control" placeholder="******">
                  </div>

                  <div class="text-end">
                    <button class="btn btn-primary mt-3">Tambah</button>
                  </div>
                </form>
                    
            </div>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->
<?= $this->endSection() ?>