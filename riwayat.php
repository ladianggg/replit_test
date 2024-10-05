<?php include 'config.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Riwayat Pembelian</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <?php include 'navbar.php'; ?>

    <div class="container my-5">
        <h2 class="text-center mb-4">Riwayat Pembelian Anda</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Paket</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                <!-- Data riwayat pembelian di sini -->
                <tr>
                    <td>01/01/2023</td>
                    <td>Paket WiFi 1</td>
                    <td>Rp 200.000</td>
                    <td><span class="badge badge-success">Sukses</span></td>
                </tr>
                <!-- Tambahkan data riwayat pembelian lainnya -->
            </tbody>
        </table>
    </div>

    <?php include 'footer.php'; ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>