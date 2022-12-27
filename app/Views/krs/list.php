<?= $this->extend('layouts/mahasiswa_layout') ?>
<?= $this->section('content') ?>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Data KRS</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">List KRS</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="card recent-sales overflow-auto">
          <div class="card-body">
                  <h5 class="card-title">Data KRS</h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Matkul</th>
                        <th scope="col">Semester</th>
                        <th scope="col">Tahun Akademik</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $no = 1; foreach ($dataKRS as $krs) : ?>
                        <tr>
                          <td>
                            <?= $no++ ?>
                          </td>
                          <td>
                            <?= $krs['kode_matkul'] ?>
                          </td>
                          <td>
                            <?= $krs['semester_krs'] ?>
                          </td>
                          <td>
                            <?= $krs['akademik_krs'] ?>
                          </td>
                          <td>
                            <a class="btn btn-danger" href="<?= base_url('mahasiswa/delete/' . $krs['id_krs']) ?>"><i class="ri-close-circle-fill"></i></a>
                          </td>
                        </tr>
                      <?php endforeach; ?>
                    </tbody>
                  </table>

                </div>
            </div>
      </div>
    </section>

  </main><!-- End #main -->
<?= $this->endSection() ?>