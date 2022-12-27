<?= $this->extend('layouts/admin_layout') ?>
<?= $this->section('content') ?>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Jurusan</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Admin</li>
          <li class="breadcrumb-item active">Jurusan</li>
          <li class="breadcrumb-item active">Update</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row justify-content-center">
        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Data Jurusan <span>| Update Data</span></h5>  

                <form action="<?= base_url('/admin/jurusan/edit/proses')?>" method="post">
                  <div class="form-group py-2">
                    <label class="mb-1">Kode Jurusan</label>
                    <input type="text" name="old_kode_jurusan" class="form-control" placeholder="Kode Jurusan" value="<?= $jurusan['kode_jurusan']?>" hidden>
                    <input type="text" name="kode_jurusan" class="form-control" placeholder="Kode Jurusan" value="<?= $jurusan['kode_jurusan']?>" >
                  </div>
                  <div class="form-group py-2">
                    <label class="mb-1">Nama Jurusan</label>
                    <input type="text" name="nama_jurusan" class="form-control" placeholder="Nama Jurusan" value="<?= $jurusan['nama_jurusan']?>">
                  </div>
                  <div class="form-group py-2">
                    <label class="mb-1">Fakultas</label>
                    <select name="pilihfakultas" class="form-control">
                      <option disabled selected>Pilih Fakultas</option>
                      <?php foreach ($dataFakultas as $fakultas) : ?>
                        <?php if($jurusan['kode_fakultas'] == $fakultas['kode_fakultas']) : ?>
                          <option value="<?= $fakultas['kode_fakultas'] ?>" selected><?= $fakultas['nama_fakultas'] ?></option>
                        <?php endif?>
                        <option value="<?= $fakultas['kode_fakultas'] ?>"><?= $fakultas['nama_fakultas'] ?></option>
                      <?php endforeach;?>  
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