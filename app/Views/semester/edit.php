<?= $this->extend('layouts/admin_layout') ?>
<?= $this->section('content') ?>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Semester</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Admin</li>
          <li class="breadcrumb-item active">Semester</li>
          <li class="breadcrumb-item active">Update</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row justify-content-center">
        <div class="col-lg-6">

        	<div class="card">
        		<div class="card-body">
              <h5 class="card-title">Data Semester <span>| Update Data</span></h5>  

                <form action="<?= base_url('/admin/semester/edit/proses')?>" method="post">
                  <div class="form-group py-2">
                    <label class="mb-1">Kode Semester</label>
                    <input type="text" name="old_kode_semester" class="form-control" value="<?= $semester['kode_semester']?>" hidden>
                    <input type="text" name="kode_semester" class="form-control" value="<?= $semester['kode_semester']?>">
                  </div>
                  <div class="form-group py-2">
                    <label class="mb-1">Nama Semester</label>
                    <input type="text" name="nama_semester" class="form-control" value="<?= $semester['nama_semester']?>">
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