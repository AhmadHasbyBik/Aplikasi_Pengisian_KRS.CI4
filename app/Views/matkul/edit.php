<?= $this->extend('layouts/admin_layout') ?>
<?= $this->section('content') ?>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Mata Kuliah</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Admin</li>
          <li class="breadcrumb-item active">Mata Kuliah</li>
          <li class="breadcrumb-item active">Update</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row justify-content-center">
        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Data Mata Kuliah <span>| Update Data</span></h5>  

                <form action="<?= base_url('/admin/matkul/edit/proses')?>" method="post">
                  <div class="form-group py-2">
                    <label class="mb-1">Kode Mata Kuliah</label>
                    <input type="text" name="old_kode_matkul" class="form-control" placeholder="Kode Mata Kuliah" value="<?= $matkul['kode_matkul']?>" hidden>
                    <input type="text" name="kode_matkul" class="form-control" placeholder="Kode Mata Kuliah" value="<?= $matkul['kode_matkul']?>" >
                  </div>
                  <div class="form-group py-2">
                    <label class="mb-1">Nama Mata Kuliah</label>
                    <input type="text" name="nama_matkul" class="form-control" placeholder="Nama Mata Kuliah" value="<?= $matkul['nama_matkul']?>">
                  </div>
                  <div class="form-group py-2">
                    <label class="mb-1">SKS Mata Kuliah</label>
                    <input type="text" name="sks_matkul" class="form-control" placeholder="SKS Mata Kuliah" value="<?= $matkul['sks_matkul']?>">
                  </div>
                  <div class="form-group py-2">
                    <label class="mb-1">Jenis Mata Kuliah</label>
                    <select name="pilihjenisMK" class="form-control">
                      <option disabled selected>Pilih Jenis Mata Kuliah</option>
                      <?php if ($matkul['jenis_matkul'] == 'teori') : ?>
                        <option value="teori" selected>Teori</option>
                        <option value="praktek">Praktek</option>
                      <?php elseif ($matkul['jenis_matkul'] == 'teori') : ?>
                        <option value="teori">Teori</option>
                        <option value="praktek" selected>Praktek</option>
                      <?php endif ?>
                    </select>
                  </div>
                  <div class="form-group py-2">
                    <label class="mb-1">Jurusan</label>
                    <select name="pilihjurusan" class="form-control">
                      <option disabled selected>Pilih Jurusan</option>
                      <?php foreach ($dataJurusan as $jurusan) : ?>
                        <?php if ($jurusan['kode_jurusan'] == $matkul['kode_jurusan']) : ?>
                          <option value="<?= $jurusan['kode_jurusan']?>" selected><?= $jurusan['nama_jurusan']?></option>
                        <?php endif ?>
                          <option value="<?= $jurusan['kode_jurusan']?>"><?= $jurusan['nama_jurusan']?></option>
                      <?php endforeach ?>
                    </select>
                  </div>
                  <div class="form-group py-2">
                    <label class="mb-1">Semester</label>
                    <select name="pilihsemester" class="form-control">
                      <option disabled selected>Pilih Semester</option>
                      <?php foreach ($dataSemester as $semester) : ?>
                        <?php if ($semester['kode_semester'] == $matkul['kode_semester']) : ?>
                          <option value="<?= $semester['kode_semester']?>" selected><?= $semester['nama_semester']?></option>
                        <?php endif ?>
                          <option value="<?= $semester['kode_semester']?>"><?= $semester['nama_semester']?></option>
                      <?php endforeach ?>
                    </select>
                  </div>

                  
                  <div class="text-end">
                    <button class="btn btn-primary mt-3">Update</button>
                  </div>
                </form>
                    
            </div>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->
<?= $this->endSection() ?>