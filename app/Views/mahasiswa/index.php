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
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="card recent-sales overflow-auto">
          <div class="card-body">
                  <h5 class="card-title">Data Mahasiswa</h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">NPM</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Tanggal Lahir</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Semester</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $no = 1; foreach ($datamahasiswa as $mahasiswa) : ?>
                        <tr>
                          <td>
                            <?= $no++ ?>
                          </td>
                          <td>
                            <?= $mahasiswa['npm_mhs'] ?>
                          </td>
                          <td>
                            <?= $mahasiswa['nama_mhs'] ?>
                          </td>
                          <td>
                            <?= $mahasiswa['tgl_lahir_mhs'] ?>
                          </td>
                          <td>
                            <?= $mahasiswa['jurusan_mhs'] ?>
                          </td>
                          <td>
                            <?= $mahasiswa['semester_mhs'] ?>
                          </td>
                          <td>
                            <a class="btn btn-warning" href="<?= base_url('/admin/mahasiswa/edit/' . $mahasiswa['npm_mhs']) ?>"><i class="bi bi-arrow-clockwise">&nbsp;</i>Update</a>
                    <a class="btn btn-danger" href="<?= base_url('/admin/mahasiswa/delete/' . $mahasiswa['npm_mhs']) ?>"><i class="bi bi-trash-fill">&nbsp;</i>Delete</a>
                </td>
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