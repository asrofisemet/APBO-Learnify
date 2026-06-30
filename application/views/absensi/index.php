<div class="container mt-5 mb-5 p-5 bg-white" style="border-radius:10px; box-shadow: 0 4px 8px rgba(0,0,0,0.05);">
    <h2 class="mb-4" style="color: black; font-family: 'poppins', sans-serif;">Data Absensi Saya</h2>
    <hr>

    <div class="table-responsive">
        <table class="table table-bordered table-hover mt-3">
            <thead class="thead-light">
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($absensi)): ?>
                    <?php $no = 1;
                    foreach ($absensi as $a): ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= date('d M Y', strtotime($a->tanggal)) ?></td>
                            <td>
                                <?php
                                $badge = ['hadir' => 'success', 'izin' => 'warning', 'sakit' => 'info', 'alpa' => 'danger'];
                                $badge_color = isset($badge[$a->status]) ? $badge[$a->status] : 'secondary';
                                ?>
                                <span class="badge badge-<?= $badge_color ?> p-2 px-3"><?= strtoupper($a->status) ?></span>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="3" class="text-center text-muted py-4">Belum ada data absensi.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>