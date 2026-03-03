<?php
// Memanggil koneksi database
require_once 'koneksi.php';
global $conn;

// Memastikan bahwa data dikirim melalui metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Menangkap data dari form berdasarkan atribut 'name'
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $pesan = $_POST['pesan'];

    // Menggunakan Prepared Statement untuk keamanan database (mencegah SQL Injection)
    $stmt = $conn->prepare("INSERT INTO pesan_kontak (nama, email, pesan) VALUES (?, ?, ?)");

    // Huruf "sss" berarti ketiga variabel bertipe String
    $stmt->bind_param("sss", $nama, $email, $pesan);

    // Mengeksekusi query
    if ($stmt->execute()) {
        // Jika berhasil, munculkan pop-up alert dan kembali ke halaman form
        echo "<script>
                alert('Terima kasih, pesan Anda berhasil dikirim!');
                window.location.href = 'Index.php#contact';
              </script>";
    } else {
        // Jika gagal, tampilkan error
        echo "Error: " . $stmt->error;
    }

    // Menutup koneksi
    $stmt->close();
    $conn->close();
} else {
    // Jika file ini diakses langsung tanpa lewat form, kembalikan ke halaman utama
    header("Location: Index.php");
    exit();
}

?>
