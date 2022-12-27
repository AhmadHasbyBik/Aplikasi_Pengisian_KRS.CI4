<?= $this->extend('layouts/mahasiswa_layout') ?>
<?= $this->section('content') ?>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-6">
          <div class="card p-3">
            <h4>Selamat Datang, <?= $user['nama_mhs'] ?>!</h4>
            <div class="row">
              <div class="col-lg-4">Nama</div>
              <div class="col-lg-8">: <?= $user['nama_mhs'] ?></div>
              <div class="col-lg-4">NPM</div>
              <div class="col-lg-8">: <?= $user['npm_mhs'] ?></div>
              <div class="col-lg-4">Tanggal Lahir</div>
              <div class="col-lg-8">: <?= $user['tgl_lahir_mhs'] ?></div>
              <div class="col-lg-4">Semester</div>
              <div class="col-lg-8">: <?= $user['semester_mhs'] ?></div>
              <div class="col-lg-4">Jurusan</div>
              <div class="col-lg-8">: <?= $user['jurusan_mhs'] ?></div>
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="card p-3 w-50">
            <img src="<?= base_url('/assets/img/uploads/' . $user['foto_mhs']) ?>" alt="" height="200">
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->
<?= $this->endSection() ?>