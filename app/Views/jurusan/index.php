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
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="card recent-sales overflow-auto">
          <div class="card-body">
                  <h5 class="card-title">Data Jurusan</h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kode Jurusan</th>
                        <th scope="col">Nama Jurusan</th>
                        <th scope="col">Kode Fakultas</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $no = 1; foreach ($dataJurusan as $jurusan) : ?>
                        <tr>
                          <td>
                            <?= $no++ ?>
                          </td>
                          <td>
                            <?= $jurusan['kode_jurusan'] ?>
                          </td>
                          <td>
                            <?= $jurusan['nama_jurusan'] ?>
                          </td>
                          <td>
                            <?= $jurusan['kode_fakultas'] ?>
                          </td>
                          <td>
                            <a class="btn btn-warning" href="<?= base_url('/admin/jurusan/edit/' . $jurusan['kode_jurusan']) ?>"><i class="bi bi-arrow-clockwise">&nbsp;</i>Update</a>
                    <a class="btn btn-danger" href="<?= base_url('/admin/jurusan/delete/' . $jurusan['kode_jurusan']) ?>"><i class="bi bi-trash-fill">&nbsp;</i>Delete</a>
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