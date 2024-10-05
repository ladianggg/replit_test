<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Pelayanan dan Pembelian WiFi</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <?php include 'navbar.php'; ?>
    <header class="bg-primary text-white text-center py-5">
        <div class="container">
            <img src="foto_perusahaan.jpg" alt="Foto Perusahaan" class="img-fluid rounded-circle mb-4" width="150">
            <h1>Nama Perusahaan</h1>
            <p class="lead">Perusahaan ini menawarkan berbagai layanan WiFi terbaik dan paket pembelian yang dapat disesuaikan dengan kebutuhan Anda.</p>
        </div>
    </header>

    <main class="container my-5">
        <div class="row">
            <div class="col-md-12">
                <h2>Layanan WiFi</h2>
                <p>Perusahaan kami menawarkan layanan WiFi yang cepat dan stabil, cocok untuk rumah dan bisnis. Kami menyediakan berbagai paket yang dapat disesuaikan dengan kebutuhan penggunaan internet Anda.</p>
                <!-- Include layanan-detail.php for service details -->
              <br>
                <?php include 'layanan-detail.php'; ?>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-12">
                <h2>Produk WiFi Kami</h2>
                <div class="row">
                    <!-- Card 1 -->
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="card-body text-center">
                                <i class="fas fa-wifi fa-3x mb-3"></i>
                                <h4 class="card-title">Paket WiFi Basic</h4>
                                <p class="card-text">Kecepatan hingga 20 Mbps cocok untuk rumah kecil.</p>
                                <a href="detail_paket.php?id=1" class="btn btn-primary">Pelajari Lebih Lanjut</a>
                            </div>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="card-body text-center">
                                <i class="fas fa-wifi fa-3x mb-3"></i>
                                <h4 class="card-title">Paket WiFi Standard</h4>
                                <p class="card-text">Kecepatan hingga 50 Mbps cocok untuk rumah menengah.</p>
                                <a href="detail_paket.php?id=2" class="btn btn-primary">Pelajari Lebih Lanjut</a>
                            </div>
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="card-body text-center">
                                <i class="fas fa-wifi fa-3x mb-3"></i>
                                <h4 class="card-title">Paket WiFi Premium</h4>
                                <p class="card-text">Kecepatan hingga 100 Mbps cocok untuk rumah besar.</p>
                                <a href="detail_paket.php?id=3" class="btn btn-primary">Pelajari Lebih Lanjut</a>
                            </div>
                        </div>
                    </div>
                    <!-- Card 4 -->
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="card-body text-center">
                                <i class="fas fa-wifi fa-3x mb-3"></i>
                                <h4 class="card-title">Paket WiFi Ultra</h4>
                                <p class="card-text">Kecepatan hingga 200 Mbps cocok untuk bisnis kecil.</p>
                                <a href="detail_paket.php?id=4" class="btn btn-primary">Pelajari Lebih Lanjut</a>
                            </div>
                        </div>
                    </div>
                    <!-- Card 5 -->
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="card-body text-center">
                                <i class="fas fa-wifi fa-3x mb-3"></i>
                                <h4 class="card-title">Paket WiFi Max</h4>
                                <p class="card-text">Kecepatan hingga 500 Mbps cocok untuk bisnis besar.</p>
                                <a href="detail_paket.php?id=5" class="btn btn-primary">Pelajari Lebih Lanjut</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <?php if (!isset($_SESSION['user'])): ?>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h2>Login</h2>
                            <p>Masuk untuk mengakses layanan khusus pelanggan.</p>
                            <p><a href="login.php" class="btn btn-secondary"><i class="fas fa-sign-in-alt"></i> Login</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h2>Registrasi</h2>
                            <p>Belum punya akun? Daftar sekarang untuk menikmati semua layanan kami.</p>
                            <p><a href="registrasi.php" class="btn btn-secondary"><i class="fas fa-user-plus"></i> Registrasi</a></p>
                        </div>
                    </div>
                </div>
            <?php else: ?>
                <div class="col-md-12 text-center">
                    <h2>Selamat datang, <?php echo htmlspecialchars($_SESSION['user']['name']); ?>!</h2>
                    <p>Terima kasih telah menggunakan layanan kami.</p>
                </div>
            <?php endif; ?>
        </div>
    </main>

    <?php include 'footer.php'; ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>