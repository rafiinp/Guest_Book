<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard - Buku Tamu Digital</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
        }
        .table {
            border-radius: 10px;
            overflow: hidden;
        }
        .table thead {
            background: linear-gradient(45deg, #007bff, #0056b3);
            color: white;
        }
        .btn-danger {
            border-radius: 8px;
            padding: 8px 15px;
        }
        .stats-card {
            background: white;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 0 15px rgba(0,0,0,0.05);
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="card p-4">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2><i class="fas fa-users-cog text-primary"></i> Dashboard Admin</h2>
                <a href="<?= base_url() ?>" class="btn btn-outline-primary">
                    <i class="fas fa-home"></i> Halaman Utama
                </a>
            </div>

            <?php if(session()->getFlashdata('success')): ?>
                <div class="alert alert-success">
                    <i class="fas fa-check-circle"></i> <?= session()->getFlashdata('success') ?>
                </div>
            <?php endif; ?>

            <div class="row mb-4">
                <div class="col-md-4">
                    <div class="stats-card text-center">
                        <i class="fas fa-users fa-2x text-primary mb-2"></i>
                        <h4><?= count($guests) ?></h4>
                        <p class="text-muted mb-0">Total Pengunjung</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="stats-card text-center">
                        <i class="fas fa-calendar-alt fa-2x text-success mb-2"></i>
                        <h4><?= date('d M Y') ?></h4>
                        <p class="text-muted mb-0">Tanggal</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="stats-card text-center">
                        <i class="fas fa-clock fa-2x text-warning mb-2"></i>
                        <h4><?= date('H:i') ?></h4>
                        <p class="text-muted mb-0">Waktu</p>
                    </div>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th><i class="fas fa-hashtag"></i> No</th>
                            <th><i class="fas fa-user"></i> Nama</th>
                            <th><i class="fas fa-envelope"></i> Email</th>
                            <th><i class="fas fa-comment"></i> Pesan</th>
                            <th><i class="fas fa-calendar"></i> Tanggal</th>
                            <th><i class="fas fa-cog"></i> Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($guests as $index => $guest): ?>
                            <tr>
                                <td><?= $index + 1 ?></td>
                                <td><?= esc($guest['name']) ?></td>
                                <td><?= esc($guest['email']) ?></td>
                                <td><?= esc($guest['message']) ?></td>
                                <td><i class="far fa-clock"></i> <?= date('d/m/Y H:i', strtotime($guest['created_at'])) ?></td>
                                <td>
                                    <a href="<?= base_url('admin/delete/'.$guest['id']) ?>" 
                                       class="btn btn-danger btn-sm" 
                                       onclick="return confirm('Yakin ingin menghapus data ini?')">
                                        <i class="fas fa-trash"></i> Hapus
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>