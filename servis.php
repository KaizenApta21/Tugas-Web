<?php
// Pastikan file koneksi dipanggil di sini
require_once 'koneksi.php';
?>

<section id="Serviceclass" class="service-section">

    <div class="service-slider">
        <div class="slide" style="background-image: url('Assets/Img/slide1.jpg');"></div>
        <div class="slide" style="background-image: url('Assets/Img/slide2.jpg');"></div>
        <div class="slide" style="background-image: url('Assets/Img/slide3.jpg');"></div>
    </div>

    <div class="service-overlay"></div>

    <div class="container text-center content-box">
        <h1 class="Oit mb-4">Our Services</h1>
        <div class="service-card row">

            <?php
            // Mendeklarasikan $conn sebagai variabel global agar dikenali di dalam scope ini
            global $conn;

            // Membuat query untuk mengambil semua data dari tabel 'service'
            $sql = "SELECT * FROM service";

            // Mengeksekusi query
            $result = $conn->query($sql);

            // Mengecek apakah query berhasil dijalankan dan data lebih dari 0
            if ($result && $result->num_rows > 0) {
                // Melakukan perulangan untuk setiap baris data
                while ($row = $result->fetch_assoc()) {
                    ?>

                    <div class="col-md-6 service-item">
                        <i class="fas fa-star service-icon"></i>

                        <h3><?php echo htmlspecialchars($row["judul"]); ?></h3>

                        <p><?php echo htmlspecialchars($row["keterangan"]); ?></p>
                    </div>

                    <?php
                }
            } else {
                // Pesan yang muncul jika tabel service di database masih kosong
                echo "<div class='col-12'><p class='text-white'>Belum ada data layanan.</p></div>";
            }
            ?>

        </div>
    </div>

</section>