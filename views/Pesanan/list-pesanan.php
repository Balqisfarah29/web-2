<!-- buatkan html untuk list pesanan -->
<?php
require_once __DIR__ . '/../../models/Pesanan.php';
require_once __DIR__ . '/../../models/Produk.php';

use models\Pesanan;
use models\Produk;

$pesananList = Pesanan::getAll();

include __DIR__ . '/../template/header.php';
include __DIR__ . '/../template/sidebar.php';
?>

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Daftar Anggota</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="../dashboard.php">Dashboard</a></li>
            <li class="breadcrumb-item active">Anggota</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <div><i class="fas fa-table me-1"></i>Data Anggota</div>
                <a href="create-anggota.php" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Tambah
                    Anggota</a>
            </div>
            <div class="card-body">
                <table id="datatablesSimple" class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tanggal</th>
                            <th>Diskon</th>
                            <th>Status bayar</th>
                            <th>Anggota</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($pesananList as $pesanan): ?>
                            <tr>
                              <td><?= $pesanan['id'] ?></td>
                                <td><?= $pesanan['tanggal'] ?></td>
                                <td><?= $pesanan['diskon'] ?></td>
                                <td><?= $pesanan['status_bayar'] ?></td>
                                <td><?= $pesanan['anggota_id'] ?></td>
                                <td>
                                    <a href="edit-pesanan.php?id=<?= $pesanan['id'] ?>"
                                        class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                    <a href="delete-pesanan.php?id=<?= $pesanan['id'] ?>"
                                        class="btn btn-danger btn-sm"
                                        onclick="return confirm('Yakin ingin menghapus pesanan ini?')"><i
                                            class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
<footer class="py-4 bg-light mt-auto">
    <div class="container-fluid px-4">
        <div class="d-flex align-items-center justify-content-between small">
            <div class="text-muted">Copyright &copy; Project 1 <?= date('Y') ?></div>
            <div>
                <a href="#">Privacy Policy</a>
                &middot;
                <a href="#">Terms &amp; Conditions</a>
            </div>
        </div>
    </div>
</footer>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    crossorigin="anonymous"></script>
<script src="../../public/js/scripts.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"></script>
<script>
    new simpleDatatables.DataTable("#datatablesSimple");
</script>
</body>

</html>