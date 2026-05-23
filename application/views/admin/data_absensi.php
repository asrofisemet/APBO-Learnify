<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Data Absensi - Learnify</title>
    <link rel="icon" href="<?= base_url('assets/') ?>img/favicon.png" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:500,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>stisla-assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>stisla-assets/css/components.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.10.0/dist/sweetalert2.all.min.js"></script>
</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i
                                    class="fas fa-bars"></i></a></li>
                    </ul>
                </form>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown"><a href="#" data-toggle="dropdown"
                            class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" style="margin-bottom:3px !important;"
                                src="<?= base_url('assets/') ?>stisla-assets/img/avatar/avatar-2.png"
                                class="rounded-circle mr-1 my-auto">
                            <div class="d-sm-none d-lg-inline-block" style="font-size:15px;">Hello,
                                <?php
                                $data_admin = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
                                echo $data_admin['username'];
                                ?>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-title">Admin - Learnify</div>
                            <a href="<?= base_url('welcome/logout') ?>" class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand text-danger">
                        <div>
                            <a href="<?= base_url('admin') ?>"
                                style="font-size: 30px;font-weight:900;font-family: 'Poppins', sans-serif;"
                                class="text-success text-center"><i style="font-size: 30px;"
                                    class="fas fa-graduation-cap"></i> |
                                Learnify <sup>3</sup></a>
                        </div>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="<?= base_url('admin') ?>">LY<sup>3</sup></a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">Dashboard</li>
                        <li class="nav-item dropdown">
                            <a href="<?= base_url('admin') ?>" class="nav-link"><i
                                    class="fas fa-desktop"></i><span>Dashboard</span></a>
                        </li>
                        <li class="menu-header">Management Siswa</li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-user"></i>
                                <span>Siswa</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="<?= base_url('admin/data_siswa') ?>">Data Siswa</a></li>
                            </ul>
                        </li>
                        <li class="menu-header">Management Guru</li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link has-dropdown"><i class="fas fa-chalkboard-teacher"></i>
                                <span>Guru</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="<?= base_url('admin/data_guru') ?>">Data Guru</a></li>
                                <li><a class="nav-link" href="<?= base_url('admin/add_guru') ?>">Tambah Data Guru</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-header">Management Materi</li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link has-dropdown"><i class="fas fa-book"></i>
                                <span>Materi</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="<?= base_url('admin/data_materi') ?>">Data Materi</a></li>
                                <li><a class="nav-link" href="<?= base_url('admin/tambah_materi') ?>">Tambah Materi</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-header">Management Absensi</li>
                        <li class="nav-item dropdown active">
                            <a href="#" class="nav-link has-dropdown"><i class="fas fa-clipboard-list"></i>
                                <span>Absensi</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="<?= base_url('admin/data_absensi') ?>">Data Absensi</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-header">About Developer</li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link has-dropdown"><i class="fas fa-address-card"></i>
                                <span>Developer</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="<?= base_url('admin/about_developer') ?>">Tentang
                                        Pembuat</a></li>
                                <li><a class="nav-link" href="<?= base_url('admin/about_learnify') ?>">Tentang
                                        Learnify</a></li>
                            </ul>
                        </li>
                    </ul>
                </aside>
            </div>
            <!-- End Sidebar -->

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">

                    <!-- Card Tambah Absensi -->
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title" style="color: black;">Management Absensi Siswa</h2>
                            <hr>
                            <p class="card-text">Tambahkan data absensi siswa untuk mencatat kehadiran setiap harinya.
                            </p>

                            <!-- Form Tambah Absensi -->
                            <button class="btn btn-success" data-toggle="collapse" data-target="#formTambah">
                                <i class="fas fa-plus"></i> Tambah Data Absensi
                            </button>
                            <div class="collapse mt-3" id="formTambah">
                                <div class="card card-body bg-light">
                                    <h5 class="font-weight-bold mb-3">Form Tambah Absensi</h5>
                                    <form action="<?= base_url('admin/tambah_absensi') ?>" method="POST">
                                        <div class="form-group">
                                            <label>Nama Siswa</label>
                                            <select name="id_siswa" class="form-control" required>
                                                <option value="">-- Pilih Siswa --</option>
                                                <?php foreach ($siswa as $s): ?>
                                                    <option value="<?= $s->id ?>">
                                                        <?= $s->nama ?>
                                                    </option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal</label>
                                            <input type="date" name="tanggal" class="form-control"
                                                value="<?= date('Y-m-d') ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Status Kehadiran</label>
                                            <select name="status" class="form-control" required>
                                                <option value="hadir">Hadir</option>
                                                <option value="izin">Izin</option>
                                                <option value="sakit">Sakit</option>
                                                <option value="alpa">Alpa</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Simpan Absensi</button>
                                        <button type="button" class="btn btn-secondary" data-toggle="collapse"
                                            data-target="#formTambah">Batal</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tabel Data Absensi -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="bg-white p-4"
                                style="border-radius:3px;box-shadow:rgba(0,0,0,0.03) 0px 4px 8px 0px;">
                                <div class="table-responsive">
                                    <table id="example" class="table align-items-center table-flush">
                                        <thead class="thead-light">
                                            <tr class="text-center">
                                                <th scope="col">ID</th>
                                                <th scope="col">Nama Siswa</th>
                                                <th scope="col">Tanggal</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if (!empty($absensi)): ?>
                                                <?php foreach ($absensi as $a): ?>
                                                    <tr class="text-center">
                                                        <th scope="row">
                                                            <?= $a->id ?>
                                                        </th>
                                                        <td>
                                                            <?= $a->nama ?? '<em class="text-muted">Siswa tidak ditemukan</em>' ?>
                                                        </td>
                                                        <td>
                                                            <?= date('d M Y', strtotime($a->tanggal)) ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                            $badge = ['hadir' => 'success', 'izin' => 'warning', 'sakit' => 'info', 'alpa' => 'danger'];
                                                            $badge_color = $badge[$a->status] ?? 'secondary';
                                                            ?>
                                                            <span class="badge badge-<?= $badge_color ?> p-2"
                                                                style="font-size:13px;">
                                                                <?= strtoupper($a->status) ?>
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <a href="<?= site_url('admin/update_absensi/' . $a->id) ?>"
                                                                class="btn btn-info btn-sm">Edit ✎</a>
                                                            <a href="<?= site_url('admin/delete_absensi/' . $a->id) ?>"
                                                                class="btn btn-danger btn-sm remove">Hapus ✖</a>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            <?php else: ?>
                                                <tr>
                                                    <td colspan="5" class="text-center text-muted py-4">
                                                        <i class="fas fa-clipboard fa-2x mb-2 d-block"></i>
                                                        Belum ada data absensi.
                                                    </td>
                                                </tr>
                                            <?php endif; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>
            </div>
            <!-- End Main Content -->

            <!-- Footer -->
            <footer class="main-footer">
                <div class="text-center">
                    Copyright &copy; 2020 <div class="bullet"></div><a href="https://github.com/syauqi">Syauqi Zaidan
                        Khairan Khalaf</a>
                </div>
            </footer>
        </div>
    </div>

    <!-- Sweetalert -->
    <?php if ($this->session->flashdata('success-reg')): ?>
        <script>
            Swal.fire({ icon: 'success', title: 'Absensi Ditambahkan!', text: 'Data absensi berhasil disimpan!', showConfirmButton: false, timer: 2500 })
        </script>
    <?php endif; ?>
    <?php if ($this->session->flashdata('success-edit')): ?>
        <script>
            Swal.fire({ icon: 'success', title: 'Absensi Diperbarui!', text: 'Data absensi berhasil diperbarui!', showConfirmButton: false, timer: 2500 })
        </script>
    <?php endif; ?>
    <?php if ($this->session->flashdata('user-delete')): ?>
        <script>
            Swal.fire({ icon: 'success', title: 'Absensi Dihapus!', text: 'Data absensi berhasil dihapus!', showConfirmButton: false, timer: 2500 })
        </script>
    <?php endif; ?>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="<?= base_url('assets/') ?>stisla-assets/js/stisla.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#example').DataTable();
            // Konfirmasi hapus
            $(document).on('click', '.remove', function (e) {
                e.preventDefault();
                var url = $(this).attr('href');
                Swal.fire({
                    title: 'Yakin ingin menghapus?',
                    text: 'Data absensi ini akan dihapus permanen!',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Ya, Hapus!',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.value) { window.location.href = url; }
                });
            });
        });
    </script>
    <script src="<?= base_url('assets/') ?>stisla-assets/js/scripts.js"></script>
    <script src="<?= base_url('assets/') ?>stisla-assets/js/custom.js"></script>
</body>

</html>