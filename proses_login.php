<?php
include 'config.php';

// Contoh data user yang sudah terdaftar (seharusnya data ini ada di database)
$users = [
    'user@example.com' => [
        'password' => 'password123',
        'name' => 'Syin'
    ]
];

$email = $_POST['email'];
$password = $_POST['password'];

if (isset($users[$email]) && $users[$email]['password'] === $password) {
    // Login berhasil
    $_SESSION['user'] = [
        'email' => $email,
        'name' => $users[$email]['name']
    ];
    header('Location: index.php');
    exit; // Tambahkan exit setelah header untuk menghentikan eksekusi skrip
} else {
    // Login gagal
    header('Location: login.php?error=Invalid%20login%20credentials');
    exit; // Tambahkan exit setelah header untuk menghentikan eksekusi skrip
}