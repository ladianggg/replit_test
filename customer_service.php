<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Customer Service (CS)</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <?php include 'navbar.php'; ?>

    <div class="container my-5">
        <h2 class="text-center mb-4">Customer Service (CS) Kami</h2>
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body text-center">
                        <i class="fas fa-headset fa-3x mb-3"></i>
                        <h5 class="card-title">Dukungan 24/7</h5>
                        <p class="card-text">Tim dukungan teknis kami siap membantu Anda kapan saja.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body text-center">
                        <i class="fas fa-envelope-open-text fa-3x mb-3"></i>
                        <h5 class="card-title">Formulir Kontak</h5>
                        <p class="card-text">Kirimkan pertanyaan atau masalah Anda melalui formulir kontak kami.</p>
                        <a href="kontak.php" class="btn btn-primary">Hubungi Kami</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body text-center">
                        <i class="fas fa-info-circle fa-3x mb-3"></i>
                        <h5 class="card-title">FAQ</h5>
                        <p class="card-text">Temukan jawaban atas pertanyaan umum yang sering diajukan oleh pelanggan.</p>
                        <a href="faq.php" class="btn btn-primary">Baca FAQ</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body text-center">
                        <i class="fas fa-phone-alt fa-3x mb-3"></i>
                        <h5 class="card-title">Layanan Telepon</h5>
                        <p class="card-text">Hubungi layanan telepon kami untuk bantuan instan.</p>
                        <p><strong>Telepon:</strong> 0800-1234-5678</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>