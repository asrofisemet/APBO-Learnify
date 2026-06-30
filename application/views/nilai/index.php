<div class="container mt-5 mb-5 p-5 bg-white" style="border-radius:10px; box-shadow: 0 4px 8px rgba(0,0,0,0.05);">
    <h2 class="mb-4" style="color: black; font-family: 'poppins', sans-serif;">Data Nilai Saya</h2>
    <hr>

    <div class="table-responsive">
        <table class="table table-bordered table-hover mt-3">
            <thead class="thead-light">
                <tr>
                    <th>No</th>
                    <th>Mata Pelajaran</th>
                    <th>Semester</th>
                    <th>Nilai</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($nilai)): ?>
                    <?php $no = 1;
                    foreach ($nilai as $n): ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $n->nama_mapel ?></td>
                            <td><?= $n->semester ?></td>
                            <td>
                                <span class="badge badge-<?= ($n->nilai >= 75) ? 'success' : 'danger' ?> p-2 px-3"
                                    style="font-size:14px;">
                                    <?= $n->nilai ?>
                                </span>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="4" class="text-center text-muted py-4">Belum ada data nilai.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>