<?php
require_once __DIR__ . '/../../models/Produk.php';

use models\Produk;

$produks = Produk::getAll();

include __DIR__ . '/../template/header.php';
include __DIR__ . '/../template/sidebar.php';
?>


<body class="sb-nav-fixed">
    <div class="container-fluid px-4 mt-4">
        <h1 class="mb-4">Daftar Produk</h1>
        <a href="create-produk.php" class="btn btn-primary mb-3"><i class="fas fa-plus"></i> Tambah Produk</a>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-box-open me-1"></i>
                Data Produk
            </div>
            <div class="card-body">
                <table id="datatablesSimple" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Harga (Rp)</th>
                            <th>Stok</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($produks as $produk): ?>
                            <tr>
                                <td><?= htmlspecialchars($produk['id']) ?></td>
                                <td><?= htmlspecialchars($produk['nama']) ?></td>
                                <td><?= number_format($produk['harga'], 0, ',', '.') ?></td>
                                <td><?= htmlspecialchars($produk['stok']) ?></td>
                                <td>
                                    <a href="detail-produk.php?id=<?= $produk['id'] ?>" class="btn btn-info btn-sm"><i
                                            class="fas fa-info-circle"></i> Detail</a>
                                    <a href="edit-produk.php?id=<?= $produk['id'] ?>" class="btn btn-warning btn-sm"><i
                                            class="fas fa-edit"></i> Edit</a>
                                    <a href="delete-produk.php?id=<?= $produk['id'] ?>" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Yakin ingin menghapus produk ini?');"><i
                                            class="fas fa-trash"></i> Hapus</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        <?php if (empty($produks)): ?>
                            <tr>
                                <td colspan="5" class="text-center">Data produk kosong</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <?php include __DIR__ . '/../template/footer.php'; ?>