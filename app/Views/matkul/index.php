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
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="card recent-sales overflow-auto">
          <div class="card-body">
                  <h5 class="card-title">Data Mata Kuliah</h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kode Mata Kuliah</th>
                        <th scope="col">Nama Mata Kuliah</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Semester</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $no = 1; foreach ($dataMatkul as $matkul) : ?>
                        <tr>
                          <td>
                            <?= $no++ ?>
                          </td>
                          <td>
                            <?= $matkul['kode_matkul'] ?>
                          </td>
                          <td>
                            <?= $matkul['nama_matkul'] ?>
                          </td>
                          <td>
                            <?= $matkul['kode_jurusan'] ?>
                          </td>
                          <td>
                            <?= $matkul['kode_semester'] ?>
                          </td>
                          <td>
                            <a class="btn btn-warning" href="<?= base_url('/admin/matkul/edit/' . $matkul['kode_matkul']) ?>"><i class="bi bi-arrow-clockwise">&nbsp;</i>Update</a>
                    <a class="btn btn-danger" href="<?= base_url('/admin/matkul/delete/' . $matkul['kode_matkul']) ?>"><i class="bi bi-trash-fill">&nbsp;</i>Delete</a>
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