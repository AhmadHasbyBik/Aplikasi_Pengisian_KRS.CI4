<?= $this->extend('layouts/admin_layout') ?>
<?= $this->section('content') ?>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          
              
              <div class="card-deck">
                <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                  <div class="card-header">Data Mahasiswa</div>
                  <div class="card-body">
                    <h2 class="card-title"><?= $totalmahasiswa ?></h2>
                  </div>
                </div>
                <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                  <div class="card-header">Data Fakultas</div>
                  <div class="card-body">
                    <h5 class="card-title"><?= $totalfakultas ?></h5>
                  </div>
                </div>
                <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
                  <div class="card-header">Data Jurusan</div>
                  <div class="card-body">
                    <h5 class="card-title"><?= $totaljurusan ?></h5>
                  </div>
                </div>
                <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                  <div class="card-header">Data Mata Kuliah</div>
                  <div class="card-body">
                    <h5 class="card-title"><?= $totalmatkul ?></h5>
                  </div>
                </div>
                <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                  <div class="card-header">Data User</div>
                  <div class="card-body">
                    <h5 class="card-title"><?= $totaluser ?></h5>
                  </div>
                </div>
              </div>


              
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->
<?= $this->endSection() ?>