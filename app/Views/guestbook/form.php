<!DOCTYPE html>
<html>
<head>
    <title>Buku Tamu Digital - Welcome</title>
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
        .form-control {
            border-radius: 10px;
            border: 1px solid #e0e0e0;
            padding: 12px;
        }
        .form-control:focus {
            box-shadow: 0 0 0 0.2rem rgba(0,123,255,0.15);
        }
        .btn-primary {
            border-radius: 10px;
            padding: 12px 30px;
            font-weight: 600;
            background: linear-gradient(45deg, #007bff, #0056b3);
            border: none;
        }
        .guest-info {
            background: linear-gradient(45deg, #f8f9fa, #e9ecef);
            border-radius: 15px;
            padding: 20px;
            margin-bottom: 30px;
        }
        .feature-item {
            padding: 15px;
            border-radius: 10px;
            background: white;
            margin-bottom: 15px;
            transition: transform 0.2s;
        }
        .feature-item:hover {
            transform: translateY(-5px);
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card p-4">
                    <div class="text-center mb-4">
                        <h2 class="mb-3"><i class="fas fa-book-open text-primary"></i> Buku Tamu Digital</h2>
                        <div class="guest-info">
                            <h5 class="mb-3"><i class="fas fa-info-circle"></i> Tentang Buku Tamu</h5>
                            <p>Selamat datang di Buku Tamu Digital kami. Kami menggunakan sistem ini untuk:</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="feature-item">
                                        <i class="fas fa-comments text-primary"></i>
                                        <p class="mb-0">Menampung feedback dan saran dari pengunjung</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="feature-item">
                                        <i class="fas fa-chart-bar text-primary"></i>
                                        <p class="mb-0">Menganalisis tingkat kepuasan pengunjung</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="feature-item">
                                        <i class="fas fa-users text-primary"></i>
                                        <p class="mb-0">Meningkatkan pelayanan kami</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="feature-item">
                                        <i class="fas fa-handshake text-primary"></i>
                                        <p class="mb-0">Membangun hubungan dengan pengunjung</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <?php if(session()->getFlashdata('success')): ?>
                            <div class="alert alert-success">
                                <i class="fas fa-check-circle"></i> <?= session()->getFlashdata('success') ?>
                            </div>
                        <?php endif; ?>

                        <?php if(isset($validation)): ?>
                            <div class="alert alert-danger">
                                <i class="fas fa-exclamation-circle"></i> <?= $validation->listErrors() ?>
                            </div>
                        <?php endif; ?>
                    </div>

                    <form action="<?= base_url('submit') ?>" method="post">
                        <div class="mb-3">
                            <label for="name" class="form-label">
                                <i class="fas fa-user text-primary"></i> Nama
                            </label>
                            <input type="text" class="form-control" id="name" name="name" value="<?= old('name') ?>" placeholder="Masukkan nama lengkap Anda">
                        </div>
                        
                        <div class="mb-3">
                            <label for="email" class="form-label">
                                <i class="fas fa-envelope text-primary"></i> Email
                            </label>
                            <input type="email" class="form-control" id="email" name="email" value="<?= old('email') ?>" placeholder="Masukkan email Anda">
                        </div>
                        
                        <div class="mb-4">
                            <label for="message" class="form-label">
                                <i class="fas fa-comment text-primary"></i> Pesan
                            </label>
                            <textarea class="form-control" id="message" name="message" rows="4" placeholder="Tulis pesan, saran, atau kesan Anda"><?= old('message') ?></textarea>
                        </div>
                        
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-paper-plane"></i> Kirim Pesan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html